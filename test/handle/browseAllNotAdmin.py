from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.by import By
from random import randint
import time

def connect():
    path_to_chromedriver = 'C:/WebDriver/chromedriver.exe'

    # Create a Service object
    s = Service(executable_path=path_to_chromedriver)

    # Pass the Service object to the Chrome constructor
    driver = webdriver.Chrome(service=s)

    url = 'http://176.191.98.14:50/'

    driver.get(url)

    return driver

def try_desc(driver):
    element_to_hover_over = driver.find_element('class name', 'card')

    # survol de la souris
    hover = ActionChains(driver).move_to_element(element_to_hover_over)
    hover.perform()

    button = ActionChains(driver).move_to_element(driver.find_element(By.LINK_TEXT, 'Bitcoin'))
    button.perform()
    driver.find_element(By.LINK_TEXT, 'Bitcoin').click()

    for x in range(0, 5):
        driver.find_element(By.LINK_TEXT, '>').click()
        time.sleep(0.05)

    for x in range(0, 5):
        driver.find_element(By.LINK_TEXT, '<').click()
        time.sleep(0.05)

def try_stat(driver):
    driver.find_element(By.LINK_TEXT, 'Statistiques').click()

    for x in range(0, 5):
        driver.find_element(By.LINK_TEXT, '>').click()
        time.sleep(0.05)

    for x in range(0, 5):
        driver.find_element(By.LINK_TEXT, '<').click()
        time.sleep(0.05)

def try_article(driver):
    driver.find_element(By.LINK_TEXT, 'Articles').click()

    article = driver.find_elements(By.CLASS_NAME, 'box-text')
    for x in range(len(article)):
        article[x].click()
        driver.get('http://176.191.98.14:50/pages/articleHub.php')
        article = driver.find_elements(By.CLASS_NAME, 'box-text')

def try_register_login(driver):
    
    driver.find_element(By.LINK_TEXT, 'S\'inscrire').click()
    email = f'jean{str(randint(0, 10))}.test{str(randint(0, 500))}.{str(randint(0, 9999999))}@example.com'

    driver.find_element(By.NAME, 'prenom').send_keys('Jean')
    driver.find_element(By.NAME, 'nom').send_keys('TEST')

    driver.find_element(By.NAME, 'email').send_keys(email)
    driver.find_element(By.NAME, 'password').send_keys('motdepasseseruce456FZA$')

    driver.find_element(By.CLASS_NAME, 'submit-button').click()

    driver.find_element(By.LINK_TEXT, 'Se connecter').click()

    driver.find_element(By.NAME, 'email').send_keys(email)
    driver.find_element(By.NAME, 'password').send_keys('motdepasseseruce456FZA$')

    driver.find_element(By.CLASS_NAME, 'submit-button').click()

def quit(driver):
    driver.quit()