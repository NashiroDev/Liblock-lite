# -*- coding: utf-8 -*-
import handle.browseAllNotAdmin as bana

def testOne():
    report = list()
    try:
        driver = bana.connect()
    except:
        report.append(['Connexion', 'Error'])
    else:
        report.append(['Connexion', 'Success'])
    
    if report[0][1] == 'Success':
        try:
            bana.try_desc(driver)
        except:
            report.append(['Description', 'Error'])
        else:
            report.append(['Description', 'Success'])
        try:
            bana.try_stat(driver)
        except:
            report.append(['Statistiques', 'Error'])
        else:
            report.append(['Statistiques', 'Success'])
        try:
            bana.try_article(driver)
        except:
            report.append(['Article', 'Error'])
        else:
            report.append(['Article', 'Success'])
        try:
            bana.try_register_login(driver)
        except:
            report.append(['Register Login', 'Error'])
        else:
            report.append(['Register Login', 'Success'])
        bana.quit(driver)
    return report

if __name__ == '__main__':
    report = testOne()
    for entry in report:
        print(f'{entry[0]} ---> {entry[1]}')
    input()