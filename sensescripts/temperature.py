#!/bin/bash

from sense_hat import SenseHat
from threading import Thread
from time import sleep

sense = SenseHat()

def threaded_function(arg):
    temperature = sense.temperature
    sense.show_message(str(temperature))


temperature = sense.temperature
thread = Thread(target = threaded_function)
thread.start()
print(str(temperature))