from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/Project-O2/project_O2/login.php?id=home")
# print(driver.title)



input_user = driver.find_element_by_xpath('//*[@id="col1"]/div[2]/input')
input_pass = driver.find_element_by_xpath('//*[@id="col1"]/div[3]/input')

input_user.send_keys("admin@gmail.com")
time.sleep(2)
input_pass.send_keys("123456")

btnlogin = driver.find_element_by_xpath('//*[@id="col1"]/button[1]')
btnlogin.click()

btnaddc = driver.find_element_by_xpath('//*[@id="Sec"]/div/div[5]/div/div/a[1]')
btnaddc.click()

input_name=driver.find_element_by_xpath('//*[@id="col1"]/div[2]/input')
input_email=driver.find_element_by_xpath('//*[@id="col1"]/div[3]/input')
input_designation=driver.find_element_by_xpath('//*[@id="col1"]/div[4]/input')
input_special=driver.find_element_by_xpath('//*[@id="col1"]/div[5]/input')
input_contact=driver.find_element_by_xpath('//*[@id="col1"]/div[6]/input')

input_name.send_keys("Test Ali")
input_email.send_keys("test@gmail.com")
input_designation.send_keys("Pro test")
input_special.send_keys("Tester")
input_contact.send_keys("12345")

btnsubmit=driver.find_element_by_xpath('/html/body/section[2]/form/div/div/button')
btnsubmit.click()


try:
	banner = driver.find_element_by_xpath('//*[@id="log-title"]/div/div/div')

	if banner.text == "Consultant added successfully":  
		print("Test is successfull")
	else:
		print("Test unsuccessfull")

except Exception as e:
	print(e)

print("Finish")


while True:
	pass