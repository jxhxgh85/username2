import telebot 
import requests, random, time, os
token = "7013792775:AAE5QdfR8falu94-Iym4GZ5EF32bMBexwTU" 
bot = telebot.TeleBot(token)

@bot.message_handler(commands=["start"])
def start(message):
    bot.send_message(message.chat.id,"""
✓ 👋 مرحباً بك عزيزي في بوت استخراج سيزون ايدي عشوائي

✓ ⛔ ارسل /get لاستخراج سيزون ايدي 

مطور بوت / @GJEGG

قناة بوت / @AFTU2
""")
@bot.message_handler(commands=["get"])
def session(message):
    number = "1234567890"
    one = "AAHSNotBfVMTBeQszUviauzgLaoyW-lMiP77650831743Aqq8Gi2bUnHQ82f3A19%3AAYfaeRYZWhfTXIAdybkLoeOCCQm2xZCW5bKgUvrTQQg3A243Aj1Rs7iMcDwIJaV3AAYfri6EA6PWObtklutkmSGEe9PI3Aj1Rs7iMcDwIJaVHqxJxJZCMDonkRg"
    second = "AAHSNotBfVMTBeQszUviauzgLaoyW-lMiP77650831743Aqq8Gi2bUnHQ82f3A19%3AAYfaeRYZWhfTXIAdybkLoeOCCQm2xZCW5bKgUvrTQQg3A243Aj1Rs7iMcDwIJaV3AAYfri6EA6PWObtklutkmSGEe9PI3Aj1Rs7iMcDwIJaVHqxJxJZCMDonkRg"
    third = "3A193A244"
    four = "1234567890"
    five = "AAHSNotBfVMTBeQszUviauzgLaoyW-lMiP77650831743Aqq8Gi2bUnHQ82f3A193AAYfaeRYZWhfTXIAdybkLoeOCCQm2xZCW5bKgUvrTQQg3A243Aj1Rs7iMcDwIJaV3AAYfri6EA6PWObtklutkmSGEe9PI3Aj1Rs7iMcDwIJaVHqxJxJZCMDonkRg"
    o1 = "".join((random.choice(number) for i in range(int(11))))
    o2 = "".join((random.choice(one) for i in range(int(14))))
    o3 = "".join((random.choice(second) for i in range(int(1))))
    o4 = "".join((random.choice(five) for i in range(int(42))))
    sessions = o1 + ":" + o2 + ":" + o3 + ":" + o4
    private = f'''
✓ ✅ سيزون الايدي الخاص بك :
✓ 📜 هذا /- {sessions}'''
    bot.send_message(message.chat.id, private)

print("\033[4;36m-"*10)
print("\033[1;30m• اضغط..... /start ")
print("\033[4;36m-"*10)
bot.polling(none_stop=True) 