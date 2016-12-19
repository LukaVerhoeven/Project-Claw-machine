# Author: Nicholas Bester
# Title: Twitter Stream connection
# Description: Tracks a string using the Twitter API and sends a Serial command to an Arduino once a Tweet matching the tracked string is found
# Version: 1.1

# imports
import time
from time import sleep
from TwitterAPI import TwitterAPI
import struct
import os
from serial import Serial
import httplib
from httplib import IncompleteRead
import requests

# Pretty console colours
class bcolors:
    HEADER = '\033[95m'
    OKBLUE = '\033[94m'
    OKGREEN = '\033[92m'
    WARNING = '\033[93m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'

# Variables
availableArduino = False # Debugging without an Arduino
testSerial = False # Debugging without Twitter connection
arduinoPort = 'COM3' # USB port address for the Arduino
arduinoBaud = '9600' # Baud for serial communication
arduinoWaitTime = 3 # The length of time Python wait before attemping to issue commands to the Arduino
stringToTrack = "#TomEnCoGift" # Change this to the search term you wish to track from Twitter

# Access requirements for Twitter API connection
access_token = '339797949-hmyahYIUlGO6377imBE420DFAQwJGmOrkzUgCW9k'
access_token_secret = 'XgC7Y2f303QzWZB5mtRZ6orqZ8qmoY8eErabpUXSOu96g'
consumer_key = '45k9ChfSdUVvvXxoh0DCACehw'
consumer_secret = 'QrHerJxIT3U6BXIbWCoybyPi5FNFDoDfaxGxrGOeV6O8pdm9i5'

# Clearing the screen for aesthetic display of console statements
os.system('cls' if os.name == 'nt' else 'clear')

print bcolors.WARNING + "Initialising Twitter Stream Application" + bcolors.ENDC

print bcolors.OKGREEN + "Initialisation OK!" + bcolors.ENDC

print bcolors.WARNING + 'Initialising Arduino Board through Serial' + bcolors.ENDC

# Arduino serial communication
if availableArduino:
    ser = Serial(arduinoPort, arduinoBaud, timeout=3)

# Gives the Arduino board time to initialise
sleep(arduinoWaitTime)

# Testing serial send to Arduino (ensure available Arduino is True)
if testSerial:
    print "On"
    ser.write(bytes(1))
    sleep(arduinoWaitTime)
    print "Off"
    ser.write(bytes(0))
    sleep(arduinoWaitTime)
else:
    print bcolors.OKGREEN + "Initialisation OK!" + bcolors.ENDC
    print bcolors.WARNING + 'Initialising Twitter Stream API Authorisation' + bcolors.ENDC
    try:
        # Setting up a connection to Twitter using the Twitter API
        api = TwitterAPI(consumer_key, consumer_secret, access_token, access_token_secret)

        print bcolors.OKGREEN + "Initialisation OK!" + bcolors.ENDC
        print bcolors.OKBLUE + 'Twitter Stream Request running' + bcolors.ENDC

        # A request object which opens a stream to Twitter tracking the hashtag in question
        r = api.request('statuses/filter', {'track':stringToTrack})

        # Checks if text within the stream item is populated and issues a command to the Arduino
        for item in r.get_iterator():
            if 'text' in item:
                print item['user']['screen_name'].encode('utf-8') + ' tweeted: ' + item['text'].encode('utf-8')# Print screen name and the tweet text
                # It is possible to check the tweets for further commands using regular expressions to send multiple commands to the Arduino
                r = requests.post("http://claw-site.local/api/postuser", data={'secret': 'F01FmbKPCk', 'twitterName' : item['user']['screen_name'].encode('utf-8')})
                file = open("newfile.html", "w")
                file.write(r.text)
                file.close()
                if availableArduino:
                    print "Activating claw machine"
                    ser.write(bytes(1)) # The command is a simple byte intepretation of the integer 1
                    sleep(arduinoWaitTime) # Wait before sending next command
                    ser.write(bytes(0))
                    sleep(arduinoWaitTime) # Wait before sending next command
    except IncompleteRead:
        # Oh well, reconnect and keep trucking
        print "IncompleteRead occurred"
    except KeyboardInterrupt:
        # Or however you want to exit this loop
        api.disconnect()
        exit()