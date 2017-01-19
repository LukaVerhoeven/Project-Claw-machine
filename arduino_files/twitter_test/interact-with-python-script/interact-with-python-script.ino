/*
      Author: Nicholas Bester
      Title: Twitter Mention Test
      Version: 0.1
*/

// Debuging variables
int const DEBUG = 0; // Test LED without Serial feedback

// LED control
int ledPin = A1;

// Value sent from Python
int signalState;

//value to check if loop has finished
bool allowLoop = true;

// Rood => Rechts
// Zwart => links

//forward pins => yellow
int forwardPin1 = 13;
int forwardPin2 = 9;

//backward pins => yellow
int backwardPin1 = 12;
int backwardPin2 = 10;

//left pins
int leftPin1 = 6;
int leftPin2 = 4;

//right pins
int rightPin1 = 7;
int rightPin2 = 3;

//up pins
int upPin1 = A0;
int upPin2 = A5;

//down pins
int downPin1 = A1;
int downPin2 = A4;

void setup() {
  // Transistor pin connection on board
  pinMode(ledPin, OUTPUT);

  pinMode(forwardPin1, OUTPUT);
  pinMode(forwardPin2, OUTPUT);
  pinMode(backwardPin1, OUTPUT);
  pinMode(backwardPin2, OUTPUT);

  pinMode(leftPin1, OUTPUT);
  pinMode(leftPin2, OUTPUT);
  pinMode(rightPin1, OUTPUT);
  pinMode(rightPin2, OUTPUT);

  pinMode(downPin1, OUTPUT);
  pinMode(downPin2, OUTPUT);
  pinMode(upPin1, OUTPUT);
  pinMode(upPin2, OUTPUT);


  // Enabling communication
  Serial.begin(9600);
  // Test breadboard setup to LED
  if (DEBUG) {
    tweetReceived();
  }


}

void loop() {
  if (!DEBUG) {
    if (Serial.available()) {
      byte receivedValue = Serial.read() - '0';
      signalState = receivedValue;

      if (signalState == 1) {
        tweetReceived();
      }

      else if (signalState == 0) {
        ledToggle(false);
      }

      Serial.flush();
    }
  }
}

// Flash the light when tweet is received
void tweetReceived() {
  /*for (int i = 0; i < 10; i++) {
    ledToggle(true);
    delay(100);
    ledToggle(false);
    delay(100);
  }*/
   if(allowLoop) {
    allowLoop = false;
    goForward(3500);
    goRight(6000);
    goDown(3000);
    goUp(3000);
    goLeft(5900); //geen 6000 => gaat anders net iets te ver
    goBackwards(3300); //geen 3500 => gaat anders net iets te ver
    goDown(1000);
    goUp(1000);
    allowLoop = true;
  }
}

// turn LED on and off
void ledToggle(boolean value) {
  if (value) {
    analogWrite(ledPin, 1023);
  } else {
    analogWrite(ledPin, 0);
  }
}

void goForward(int amountOfMS) {
  delay(500); //making sure not to short out the circuit
  digitalWrite(backwardPin1, LOW);
  digitalWrite(backwardPin2, LOW);
  digitalWrite(forwardPin1, HIGH);
  digitalWrite(forwardPin2, HIGH);
  delay(amountOfMS);
  //making sure all outputs are LOW again after action
  digitalWrite(backwardPin1, LOW);
  digitalWrite(backwardPin2, LOW);
  digitalWrite(forwardPin1, LOW);
  digitalWrite(forwardPin2, LOW);
}

void goBackwards(int amountOfMS) {
  delay(500); //making sure not to short out the circuit
  digitalWrite(backwardPin1, HIGH);
  digitalWrite(backwardPin2, HIGH);
  digitalWrite(forwardPin1, LOW);
  digitalWrite(forwardPin2, LOW);
  delay(amountOfMS);
  //making sure all outputs are LOW again after action
  digitalWrite(backwardPin1, LOW);
  digitalWrite(backwardPin2, LOW);
  digitalWrite(forwardPin1, LOW);
  digitalWrite(forwardPin2, LOW);
}

void goLeft(int amountOfMS) {
  delay(500); //making sure not to short out the circuit
  digitalWrite(leftPin1, HIGH);
  digitalWrite(leftPin2, HIGH);
  digitalWrite(rightPin1, LOW);
  digitalWrite(rightPin2, LOW);
  delay(amountOfMS);
  //making sure all outputs are LOW again after action
  digitalWrite(leftPin1, LOW);
  digitalWrite(leftPin2, LOW);
  digitalWrite(rightPin1, LOW);
  digitalWrite(rightPin2, LOW);
}

void goRight(int amountOfMS) {
  delay(500); //making sure not to short out the circuit
  digitalWrite(rightPin1, HIGH);
  digitalWrite(rightPin2, HIGH);
  digitalWrite(leftPin1, LOW);
  digitalWrite(leftPin2, LOW);
  delay(amountOfMS);
  //making sure all outputs are LOW again after action
  digitalWrite(leftPin1, LOW);
  digitalWrite(leftPin2, LOW);
  digitalWrite(rightPin1, LOW);
  digitalWrite(rightPin2, LOW);
}

void goDown(int amountOfMS) {
  delay(500); //making sure not to short out the circuit
  digitalWrite(downPin1, HIGH);
  digitalWrite(downPin2, HIGH);
  digitalWrite(upPin1, LOW);
  digitalWrite(upPin2, LOW);
  delay(amountOfMS);
  //making sure all outputs are LOW again after action
  digitalWrite(downPin1, LOW);
  digitalWrite(downPin2, LOW);
  digitalWrite(upPin1, LOW);
  digitalWrite(upPin2, LOW);
}

void goUp(int amountOfMS) {
  delay(500); //making sure not to short out the circuit
  digitalWrite(upPin1, HIGH);
  digitalWrite(upPin2, HIGH);
  digitalWrite(downPin1, LOW);
  digitalWrite(downPin2, LOW);
  delay(amountOfMS);
  //making sure all outputs are LOW again after action
  digitalWrite(downPin1, LOW);
  digitalWrite(downPin2, LOW);
  digitalWrite(upPin1, LOW);
  digitalWrite(upPin2, LOW);
}
