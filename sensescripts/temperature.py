#!/bin/bash

from sense_hat import SenseHat

sense = SenseHat()

temperature = sense.temperature
sense.show_message(str(temperature))
print(str(temperature))