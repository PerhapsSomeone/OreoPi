#!/bin/bash

from sense_hat import SenseHat
from threading import Thread
from time import sleep

sense = SenseHat()

temperature = sense.temperature
print(str(temperature))
