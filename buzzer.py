from gpiozero import LED
from time import sleep

buzzer = LED(23)

buzzer.on()
sleep(0.5)
buzzer.off()
sleep(0.5)
buzzer.on()
sleep(0.5)
buzzer.off()
sleep(0.5)
buzzer.on()
sleep(0.5)
buzzer.off()
