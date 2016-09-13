# SFZ-Speiseplan-Telegram-Bot
# Autor: Oliver Z
# Version: 1.0

from urllib.request import urlopen
import re
import datetime
import telepot

bot = telepot.Bot('TG-API-KEY')

# getspeise(wochentag, speisenr) gibt Namen der entsprechenden Speise aus
def getspeise(wochentag,speisenr):
    response = urlopen("http://www.sfz.rcs.de/")
    htmlcontent = response.read().decode('utf-8')
    regexstr='(?s)(?<=menue-Menue'+str(speisenr)+' weekday-'+str(wochentag)+'">)(.+?)(?=<div class="menueIconContain">)'
    speiselist = re.findall(regexstr,htmlcontent)
    speise = "".join(speiselist) # speiselist ist Liste, da findall (hat aber im Normalfall nur ein Ergebnis); das hier macht Liste zu String
    speise = speise.replace("<br />", " ") # br entfernen
    speise = speise.replace('- ', '-')
    speise = speise.replace('- ', '-')
    speise = speise.replace(' -', '-')
    speise = speise.replace(' -', '-')
    return (speise.split("/")[0])

# speiseheute() gibt Satz mit allen Speisen für den heutigen Wochentag aus
def speiseheute():
    speiseheute1 = getspeise(datetime.datetime.today().weekday()+1,1)
    speiseheute2 = getspeise(datetime.datetime.today().weekday()+1, 2)
    speiseheute3 = getspeise(datetime.datetime.today().weekday()+1, 3)
    speiseheute4 = getspeise(datetime.datetime.today().weekday() + 1, 4)
    heute = datetime.datetime.now().strftime('%A')
    heute = heute.replace('Monday','Montag')
    heute = heute.replace('Tuesday', 'Dienstag')
    heute = heute.replace('Wednesday', 'Mittwoch')
    heute = heute.replace('Thursday', 'Donnerstag')
    heute = heute.replace('Friday', 'Freitag')
    return('Heute, an diesem schönen '+heute+', gibt es entweder *' + speiseheute1 + '* oder *' + speiseheute2 + '* oder auch *' + speiseheute3 + '*. Alternativ gibt es auch *' + speiseheute4 + '*.')

bot.sendMessage("@sfzspeisen", speiseheute(), parse_mode='Markdown')
