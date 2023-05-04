# -*- coding: utf-8 -*-
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.by import By

import time

path_to_chromedriver = 'C:/WebDriver/chromedriver.exe'

# Create a Service object
s = Service(executable_path=path_to_chromedriver)

# Pass the Service object to the Chrome constructor
driver = webdriver.Chrome(service=s)

url = 'http://176.191.98.14:50/'

driver.get(url)

element_to_hover_over = driver.find_element('class name', 'card')

# survol de la souris
hover = ActionChains(driver).move_to_element(element_to_hover_over)
hover.perform()

button = ActionChains(driver).move_to_element(driver.find_element(By.LINK_TEXT, 'Bitcoin'))
button.perform()
driver.find_element(By.LINK_TEXT, 'Bitcoin').click()

# ferme le navigateur
driver.quit()