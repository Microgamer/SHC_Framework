<?php

/**
 * Schaltbare Elemente Sprachvariablen
 *
 * @author     Oliver Kleditzsch
 * @copyright  Copyright (c) 2014, Oliver Kleditzsch
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @since      2.0.0-0
 * @version    2.0.0-0
 */
$l = array();

//Allgemein
$l['acp.switchableManagement.title'] = 'Schaltbare Elemente verwalten';
$l['acp.switchableManagement.radioSockets'] = 'Funksteckdosen';
$l['acp.switchableManagement.gpios'] = 'GPIO\'s';
$l['acp.switchableManagement.gpios.switchserver'] = 'Schaltserver:';
$l['acp.switchableManagement.radioSockets.sysCode'] = 'Systemcode/Unit ID:';
$l['acp.switchableManagement.title.switchPoints'] = 'Schaltpunkte:';
$l['acp.switchableManagement.title.events'] = 'Ereignisse:';
$l['acp.switchableManagement.title.nothing'] = 'keine:';
$l['acp.switchableManagement.message.id.error'] = 'Ungültige Raum ID';
$l['acp.switchableManagement.title.addSwitchable'] = 'schaltbares Element hinzufügen';
$l['acp.switchableManagement.button.switchFunctions'] = 'Schaltfunktionen';
$l['acp.switchableManagement.switchables'] = 'Schaltbare Elemente';
$l['acp.switchableManagement.sensors'] = 'Sensoren';

//Elemente Tabelle
$l['acp.switchableManagement.elementTable.table.head.name'] = 'Name';
$l['acp.switchableManagement.elementTable.table.head.rooms'] = 'Räume';
$l['acp.switchableManagement.elementTable.table.head.command'] = 'Befehl';
$l['acp.switchableManagement.elementTable.table.head.type'] = 'Typ';
$l['acp.switchableManagement.elementTable.table.head.devCode'] = 'Gerätecode/ID';
$l['acp.switchableManagement.elementTable.table.head.pin'] = 'Pin';
$l['acp.switchableManagement.elementTable.table.head.protocol'] = 'Protokoll';

//Buttons
$l['acp.switchableManagement.button.listBoxes'] = 'Boxen verwalten';
$l['acp.switchableManagement.button.listElementsWithoutRoom'] = 'Raumlose Elemente';
$l['acp.switchableManagement.button.toggleCommand'] = 'Befehl umkehren';
$l['acp.switchableManagement.button.deleteFormContainer'] = 'entfernen';
$l['acp.switchableManagement.button.assignment'] = 'Belegung';
$l['acp.switchableManagement.button.assignment.switchserverDeleted'] = 'gelöscht';
$l['acp.switchableManagement.button.addElement'] = 'Element erstellen';
$l['acp.switchableManagement.button.addBox'] = 'Box erstellen';
$l['acp.switchableManagement.button.next'] = 'weiter';
$l['acp.switchableManagement.button.addToBox'] = 'Element hinzufügen';
$l['acp.switchableManagement.button.addToSwitchableContainer'] = 'hinzufügen';

//Typen
$l['acp.switchableManagement.element.activity'] = 'Aktivität';
$l['acp.switchableManagement.element.countdown'] = 'Countdown';
$l['acp.switchableManagement.element.radiosocket'] = 'Funksteckdose';
$l['acp.switchableManagement.element.rpiGpioOutput'] = 'Ausgang';
$l['acp.switchableManagement.element.wakeOnLan'] = 'Wake On Lan';
$l['acp.switchableManagement.element.rpiGpioInput'] = 'Eingang';
$l['acp.switchableManagement.element.radioScketDimmer'] = 'Funkdimmer';
$l['acp.switchableManagement.element.reboot'] = 'Neustart';
$l['acp.switchableManagement.element.shutdown'] = 'Herunterfahren';
$l['acp.switchableManagement.element.remoteReboot'] = 'externes Gerät Neustarten';
$l['acp.switchableManagement.element.remoteShutdown'] = 'externes Gerät Herunterfahren';
$l['acp.switchableManagement.element.script'] = 'Script';
$l['acp.switchableManagement.element.avmSocket'] = 'AVM Steckdose';
$l['acp.switchableManagement.element.fritzBox'] = 'Fritz!Box';
$l['acp.switchableManagement.element.BMP'] = 'BMP 085/180';
$l['acp.switchableManagement.element.DHT'] = 'DHT 11/22';
$l['acp.switchableManagement.element.DS18x20'] = 'DS18x20';
$l['acp.switchableManagement.element.Hygrometer'] = 'Feuchtigkeits Sensor';
$l['acp.switchableManagement.element.LDR'] = 'Lichtstärke Sensor';
$l['acp.switchableManagement.element.RainSensor'] = 'Regen Sensor';
$l['acp.switchableManagement.element.avmMeasuringSocket'] = 'AVM Steckdosen Sensor';
$l['acp.switchableManagement.element.box'] = 'Box';

//Prompts
$l['acp.switchableManagement.prompt.deleteSwitchable.title'] = 'Schaltbares Element löschen';
$l['acp.switchableManagement.prompt.deleteSwitchable'] = 'Willst du das schaltbare Element wirklich löschen?';
$l['acp.switchableManagement.prompt.deleteReadable.title'] = 'Lesbares Element löschen';
$l['acp.switchableManagement.prompt.deleteReadable'] = 'Willst du das lesbare Element wirklich löschen?';
$l['acp.switchableManagement.prompt.deleteSensor.title'] = 'Sensor löschen';
$l['acp.switchableManagement.prompt.deleteSensor'] = 'Willst du den Sensor wirklich löschen?';
$l['acp.switchableManagement.prompt.deleteBox.title'] = 'Box löschen';
$l['acp.switchableManagement.prompt.deleteBox'] = 'Willst du die Box wirklich löschen?';
$l['acp.switchableManagement.prompt.error.notSwitchable'] = 'Die Anzeige der Schaltpunkte und Ereignise geht nur fuer schaltbare Elemente';

//Formularelemente
$l['acp.switchableManagement.form.addActivity.name'] = 'Name';
$l['acp.switchableManagement.form.addActivity.name.description'] = 'Name der Aktivität';
$l['acp.switchableManagement.form.addActivity.icon'] = 'Icon';
$l['acp.switchableManagement.form.addActivity.icon.description'] = 'Icon der Aktivität';
$l['acp.switchableManagement.form.addActivity.buttonText'] = 'Button Label';
$l['acp.switchableManagement.form.addActivity.buttonText.description'] = 'legt fest welche Button Namen verwendet werden sollen';
$l['acp.switchableManagement.form.addActivity.room'] = 'Raum';
$l['acp.switchableManagement.form.addActivity.room.description'] = 'Raum dem die Aktivität zugeordnet ist';
$l['acp.switchableManagement.form.addActivity.switchPoints'] = 'Schaltpunkte';
$l['acp.switchableManagement.form.addActivity.switchPoints.description'] = 'Schaltpunkte der Aktivität';
$l['acp.switchableManagement.form.addActivity.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addActivity.active.description'] = 'Aktiviert/Deaktiviert die Aktivität';
$l['acp.switchableManagement.form.addActivity.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addActivity.visibility.description'] = 'Sichtbarkeit der Aktivität';
$l['acp.switchableManagement.form.addActivity.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addActivity.allowedUsers.description'] = 'legt fest welche Benutzer die Aktivität verwenden dürfen';

$l['acp.switchableManagement.form.addCountdown.name'] = 'Name';
$l['acp.switchableManagement.form.addCountdown.name.description'] = 'Name des Countdowns';
$l['acp.switchableManagement.form.addCountdown.icon'] = 'Icon';
$l['acp.switchableManagement.form.addCountdown.icon.description'] = 'Icon des Countdowns';
$l['acp.switchableManagement.form.addCountdown.buttonText'] = 'Button Label';
$l['acp.switchableManagement.form.addCountdown.buttonText.description'] = 'legt fest welche Button Namen verwendet werden sollen';
$l['acp.switchableManagement.form.addCountdown.room'] = 'Raum';
$l['acp.switchableManagement.form.addCountdown.room.description'] = 'Raum dem der Countdown zugeordnet ist';
$l['acp.switchableManagement.form.addCountdown.interval'] = 'Intervall';
$l['acp.switchableManagement.form.addCountdown.interval.description'] = 'Wartezeit in Sekunden bis zum automatischen umschalten der Befehle';
$l['acp.switchableManagement.form.addCountdown.switchPoints'] = 'Schaltpunkte';
$l['acp.switchableManagement.form.addCountdown.switchPoints.description'] = 'Schaltpunkte des Countdowns';
$l['acp.switchableManagement.form.addCountdown.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addCountdown.active.description'] = 'Aktiviert/Deaktiviert den Countdown';
$l['acp.switchableManagement.form.addCountdown.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addCountdown.visibility.description'] = 'Sichtbarkeit des Countdowns';
$l['acp.switchableManagement.form.addCountdown.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addCountdown.allowedUsers.description'] = 'legt fest welche Benutzer den Countdown verwenden dürfen';

$l['acp.switchableManagement.form.addRadioSocket.name'] = 'Name';
$l['acp.switchableManagement.form.addRadioSocket.name.description'] = 'Name der Funksteckdose';
$l['acp.switchableManagement.form.addRadioSocket.icon'] = 'Icon';
$l['acp.switchableManagement.form.addRadioSocket.icon.description'] = 'Icon der Funsteckdose';
$l['acp.switchableManagement.form.addRadioSocket.buttonText'] = 'Button Label';
$l['acp.switchableManagement.form.addRadioSocket.buttonText.description'] = 'legt fest welche Button Namen verwendet werden sollen';
$l['acp.switchableManagement.form.addRadioSocket.room'] = 'Raum';
$l['acp.switchableManagement.form.addRadioSocket.room.description'] = 'Raum in dem sich die Funksteckdose befindet';
$l['acp.switchableManagement.form.addRadioSocket.protocol'] = 'Protokoll';
$l['acp.switchableManagement.form.addRadioSocket.protocol.description'] = 'Protokoll der Funksteckdose';
$l['acp.switchableManagement.form.addRadioSocket.systemCode'] = 'System Code';
$l['acp.switchableManagement.form.addRadioSocket.systemCode.description'] = 'System Code der Funksteckdose';
$l['acp.switchableManagement.form.addRadioSocket.deviceCode'] = 'Geräte Code';
$l['acp.switchableManagement.form.addRadioSocket.deviceCode.description'] = 'Geräte Code der Funksteckdose';
$l['acp.switchableManagement.form.addRadioSocket.continuous'] = 'Sendevorgänge';
$l['acp.switchableManagement.form.addRadioSocket.continuous.description'] = 'Hier kannst du einstellen wie oft der Schaltbefehl gesendet werden soll (dadurch lassen sich manche Steckdosen zuverlässiger steuern)';
$l['acp.switchableManagement.form.addRadioSocket.switchPoints'] = 'Schaltpunkte';
$l['acp.switchableManagement.form.addRadioSocket.switchPoints.description'] = 'Schaltpunkte der Funksteckdose';
$l['acp.switchableManagement.form.addRadioSocket.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addRadioSocket.active.description'] = 'Aktiviert/Deaktiviert die Funksteckdose';
$l['acp.switchableManagement.form.addRadioSocket.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addRadioSocket.visibility.description'] = 'Sichtbarkeit der Funksteckdose';
$l['acp.switchableManagement.form.addRadioSocket.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addRadioSocket.allowedUsers.description'] = 'legt fest welche Benutzer die Funksteckdose verwenden dürfen';

$l['acp.switchableManagement.form.addGpioOutput.name'] = 'Name';
$l['acp.switchableManagement.form.addGpioOutput.name.description'] = 'Name des GPIO`s';
$l['acp.switchableManagement.form.addGpioOutput.icon'] = 'Icon';
$l['acp.switchableManagement.form.addGpioOutput.icon.description'] = 'Icon des GPIO`s';
$l['acp.switchableManagement.form.addGpioOutput.buttonText'] = 'Button Label';
$l['acp.switchableManagement.form.addGpioOutput.buttonText.description'] = 'legt fest welche Button Namen verwendet werden sollen';
$l['acp.switchableManagement.form.addGpioOutput.room'] = 'Raum';
$l['acp.switchableManagement.form.addGpioOutput.room.description'] = 'Raum in dem sich der GPIO befindet';
$l['acp.switchableManagement.form.addGpioOutput.switchServer'] = 'Schaltserver';
$l['acp.switchableManagement.form.addGpioOutput.switchServer.description'] = 'Schaltserver zu dem der GPIO gehört';
$l['acp.switchableManagement.form.addGpioOutput.gpioPin'] = 'GPIO Pin';
$l['acp.switchableManagement.form.addGpioOutput.gpioPin.description'] = 'wiringPi Pin Nummer des GPIO`s';
$l['acp.switchableManagement.form.addGpioOutput.switchPoints'] = 'Schaltpunkte';
$l['acp.switchableManagement.form.addGpioOutput.switchPoints.description'] = 'Schaltpunkte des GPIO`s';
$l['acp.switchableManagement.form.addGpioOutput.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addGpioOutput.active.description'] = 'Aktiviert/Deaktiviert den GPIO';
$l['acp.switchableManagement.form.addGpioOutput.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addGpioOutput.visibility.description'] = 'Sichtbarkeit des GPIO';
$l['acp.switchableManagement.form.addGpioOutput.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addGpioOutput.allowedUsers.description'] = 'legt fest welche Benutzer den GPIO verwenden dürfen';

$l['acp.switchableManagement.form.addWol.name'] = 'Name';
$l['acp.switchableManagement.form.addWol.name.description'] = 'Name des WOL Gerätes';
$l['acp.switchableManagement.form.addWol.room'] = 'Raum';
$l['acp.switchableManagement.form.addWol.room.description'] = 'Raum in dem sich das WOL Gerät befindet';
$l['acp.switchableManagement.form.addWol.mac'] = 'MAC Adresse';
$l['acp.switchableManagement.form.addWol.mac.description'] = 'MAC Adresse der Wak On Lan fähigem Netzwerkchips';
$l['acp.switchableManagement.form.addWol.ip'] = 'IP Adresse';
$l['acp.switchableManagement.form.addWol.ip.description'] = 'IP Adresse der Wak On Lan fähigem Netzwerkchips';
$l['acp.switchableManagement.form.addWol.switchPoints'] = 'Schaltpunkte';
$l['acp.switchableManagement.form.addWol.switchPoints.description'] = 'Schaltpunkte des WOL Gerätes';
$l['acp.switchableManagement.form.addWol.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addWol.active.description'] = 'Aktiviert/Deaktiviert das WOL Gerät';
$l['acp.switchableManagement.form.addWol.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addWol.visibility.description'] = 'Sichtbarkeit des WOL Gerätes';
$l['acp.switchableManagement.form.addWol.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addWol.allowedUsers.description'] = 'legt fest welche Benutzer das WOL Gerät einschalten dürfen';

$l['acp.switchableManagement.form.sensorForm.name'] = 'Name';
$l['acp.switchableManagement.form.sensorForm.name.description'] = 'Name des Sensors';
$l['acp.switchableManagement.form.sensorForm.icon'] = 'Icon';
$l['acp.switchableManagement.form.sensorForm.icon.description'] = 'Icon des Sensors';
$l['acp.switchableManagement.form.sensorForm.room'] = 'Raum';
$l['acp.switchableManagement.form.sensorForm.room.description'] = 'Raum in dem sich der Sensor befindet';
$l['acp.switchableManagement.form.sensorForm.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.sensorForm.visibility.description'] = 'Sichtbarkeit des Sensors';
$l['acp.switchableManagement.form.sensorForm.temperatureVisibility'] = 'Temperatur Anzeigen';
$l['acp.switchableManagement.form.sensorForm.temperatureVisibility.description'] = 'Aktiviert/Deaktiviert die Sichtbarkeit der Temperatur des Sensors';
$l['acp.switchableManagement.form.sensorForm.temperatureOffset'] = 'Temperatur Offset';
$l['acp.switchableManagement.form.sensorForm.pressureOffset'] = 'Luftdruck Offset';
$l['acp.switchableManagement.form.sensorForm.altitudeOffset'] = 'Höhen Offset';
$l['acp.switchableManagement.form.sensorForm.humidityOffset'] = 'Luftfeuchte Offset';
$l['acp.switchableManagement.form.sensorForm.valueOffset'] = 'Offset';
$l['acp.switchableManagement.form.sensorForm.offset.description'] = 'Addiert den eingegbenen Wert zum Messwert des Sensors';
$l['acp.switchableManagement.form.sensorForm.humidityVisibility'] = 'Luftfeuchte Anzeigen';
$l['acp.switchableManagement.form.sensorForm.humidityVisibility.description'] = 'Aktiviert/Deaktiviert die Sichtbarkeit der Luftfeuchte des Sensors';
$l['acp.switchableManagement.form.sensorForm.pressureVisibility'] = 'Luftdruck Anzeigen';
$l['acp.switchableManagement.form.sensorForm.pressureVisibility.description'] = 'Aktiviert/Deaktiviert die Sichtbarkeit des Luftdruckes des Sensors';
$l['acp.switchableManagement.form.sensorForm.altitudeVisibility'] = 'Standorthöhe Anzeigen';
$l['acp.switchableManagement.form.sensorForm.altitudeVisibility.description'] = 'Aktiviert/Deaktiviert die Sichtbarkeit der Standorthöhe des Sensors';
$l['acp.switchableManagement.form.sensorForm.valueVisibility'] = 'Wert Anzeigen';
$l['acp.switchableManagement.form.sensorForm.valueVisibility.description'] = 'Aktiviert/Deaktiviert die Sichtbarkeit des Wertes des Sensors';
$l['acp.switchableManagement.form.sensorForm.powerVisibility'] = 'Leistung Anzeigen';
$l['acp.switchableManagement.form.sensorForm.powerVisibility.description'] = 'Aktiviert/Deaktiviert die Sichtbarkeit der aktuell entnommene Leistung des Sensors';
$l['acp.switchableManagement.form.sensorForm.energyVisibility'] = 'Arbeit Anzeigen';
$l['acp.switchableManagement.form.sensorForm.energyVisibility.description'] = 'Aktiviert/Deaktiviert die Sichtbarkeit des der elektrischen Arbeit seit Inbetriebnahme des Sensors';
$l['acp.switchableManagement.form.sensorForm.dataRecording'] = 'Datenaufzeichnung';
$l['acp.switchableManagement.form.sensorForm.dataRecording.description'] = 'Sollen die Sensordaten aufgezeichnet werden?';

$l['acp.switchableManagement.form.box.name'] = 'Name';
$l['acp.switchableManagement.form.box.name.description'] = 'Name der Box';
$l['acp.switchableManagement.form.box.room'] = 'Raum';
$l['acp.switchableManagement.form.box.room.description'] = 'Raum in dem sich die Box befindet';
$l['acp.switchableManagement.form.box.elements'] = 'Elemente';
$l['acp.switchableManagement.form.box.elements.description'] = 'Elemente der Box';

$l['acp.switchableManagement.form.addReboot.name'] = 'Name';
$l['acp.switchableManagement.form.addReboot.name.description'] = 'Name';
$l['acp.switchableManagement.form.addReboot.room'] = 'Raum';
$l['acp.switchableManagement.form.addReboot.room.description'] = 'Raum';
$l['acp.switchableManagement.form.addReboot.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addReboot.active.description'] = 'Aktiviert/Deaktiviert den Neustart';
$l['acp.switchableManagement.form.addReboot.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addReboot.visibility.description'] = 'Sichtbarkeit des Neustarts';
$l['acp.switchableManagement.form.addReboot.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addReboot.allowedUsers.description'] = 'legt fest welche Benutzer den Neustart verwenden dürfen';

$l['acp.switchableManagement.form.addShutdown.name'] = 'Name';
$l['acp.switchableManagement.form.addShutdown.name.description'] = 'Name';
$l['acp.switchableManagement.form.addShutdown.room'] = 'Raum';
$l['acp.switchableManagement.form.addShutdown.room.description'] = 'Raum';
$l['acp.switchableManagement.form.addShutdown.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addShutdown.active.description'] = 'Aktiviert/Deaktiviert den Shutdown';
$l['acp.switchableManagement.form.addShutdown.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addShutdown.visibility.description'] = 'Sichtbarkeit des Shutdown';
$l['acp.switchableManagement.form.addShutdown.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addShutdown.allowedUsers.description'] = 'legt fest welche Benutzer den Shutdown verwenden dürfen';

$l['acp.switchableManagement.form.addScript.name'] = 'Name';
$l['acp.switchableManagement.form.addScript.name.description'] = 'Name';
$l['acp.switchableManagement.form.addScript.room'] = 'Raum';
$l['acp.switchableManagement.form.addScript.room.description'] = 'Raum';
$l['acp.switchableManagement.form.addScript.icon'] = 'Icon';
$l['acp.switchableManagement.form.addScript.icon.description'] = 'Icon des Scripts';
$l['acp.switchableManagement.form.addScript.buttonText'] = 'Button Label';
$l['acp.switchableManagement.form.addScript.buttonText.description'] = 'legt fest welche Button Namen verwendet werden sollen';
$l['acp.switchableManagement.form.addScript.onCommand'] = 'an Kommando';
$l['acp.switchableManagement.form.addScript.onCommand.description'] = 'Kommando das beim drücken/aufrufen des an Kommandos ausgeführt wird';
$l['acp.switchableManagement.form.addScript.offCommand'] = 'aus Kommando';
$l['acp.switchableManagement.form.addScript.offCommand.description'] = 'Kommando das beim drücken/aufrufen des aus Kommandos ausgeführt wird';
$l['acp.switchableManagement.form.addScript.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addScript.active.description'] = 'Aktiviert/Deaktiviert das Script';
$l['acp.switchableManagement.form.addScript.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addScript.visibility.description'] = 'Sichtbarkeit des Scriptes';
$l['acp.switchableManagement.form.addScript.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addScript.allowedUsers.description'] = 'legt fest welche Benutzer das Script verwenden dürfen';

$l['acp.switchableManagement.form.addAvmSocket.name'] = 'Name';
$l['acp.switchableManagement.form.addAvmSocket.name.description'] = 'Name der Steckdose';
$l['acp.switchableManagement.form.addAvmSocket.icon'] = 'Icon';
$l['acp.switchableManagement.form.addAvmSocket.icon.description'] = 'Icon der Steckdose';
$l['acp.switchableManagement.form.addAvmSocket.buttonText'] = 'Button Label';
$l['acp.switchableManagement.form.addAvmSocket.buttonText.description'] = 'legt fest welche Button Namen verwendet werden sollen';
$l['acp.switchableManagement.form.addAvmSocket.room'] = 'Raum';
$l['acp.switchableManagement.form.addAvmSocket.room.description'] = 'Raum dem die Steckdose zugeordnet ist';
$l['acp.switchableManagement.form.addAvmSocket.ain'] = 'Indentifizierer';
$l['acp.switchableManagement.form.addAvmSocket.ain.description'] = 'entweder die AIN Nummer (steht auf dem Gerät) oder die IP';
$l['acp.switchableManagement.form.addAvmSocket.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addAvmSocket.active.description'] = 'Aktiviert/Deaktiviert die Steckdose';
$l['acp.switchableManagement.form.addAvmSocket.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addAvmSocket.visibility.description'] = 'Sichtbarkeit der Steckdose';
$l['acp.switchableManagement.form.addAvmSocket.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addAvmSocket.allowedUsers.description'] = 'legt fest welche Benutzer die Steckdose verwenden dürfen';

$l['acp.switchableManagement.form.addFritzBox.function'] = 'Funktion';
$l['acp.switchableManagement.form.addFritzBox.function.description'] = 'währle die Funktion des Elements aus';
$l['acp.switchableManagement.form.addFritzBox.function.wlan1'] = '2,4GHz WLan';
$l['acp.switchableManagement.form.addFritzBox.function.wlan2'] = '5GHz WLan';
$l['acp.switchableManagement.form.addFritzBox.function.wlan3'] = 'Gäste WLan';
$l['acp.switchableManagement.form.addFritzBox.function.reconnect'] = 'Internet neu Verbinden';
$l['acp.switchableManagement.form.addFritzBox.function.reboot'] = 'Fritz!Box Neustart';
$l['acp.switchableManagement.form.addFritzBox.room'] = 'Raum';
$l['acp.switchableManagement.form.addFritzBox.room.description'] = 'Raum dem die Fritz!Box zugeordnet ist';
$l['acp.switchableManagement.form.addFritzBox.active'] = 'Aktiv';
$l['acp.switchableManagement.form.addFritzBox.active.description'] = 'Aktiviert/Deaktiviert die Fritz!Box';
$l['acp.switchableManagement.form.addFritzBox.visibility'] = 'Sichtbarkeit';
$l['acp.switchableManagement.form.addFritzBox.visibility.description'] = 'Sichtbarkeit der Fritz!Box';
$l['acp.switchableManagement.form.addFritzBox.allowedUsers'] = 'erlaubte Benutzer';
$l['acp.switchableManagement.form.addFritzBox.allowedUsers.description'] = 'legt fest welche Benutzer die Fritz!Box verwenden dürfen';

//Meldungen
$l['acp.switchableManagement.form.addActivity.success'] =  'Die Aktivität wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.addElementToActivity.success'] =  'Das Element wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.deleteElementFromActivity.success'] =  'Das Element wurde erfolgreich entfernt';
$l['acp.switchableManagement.form.editActivity.success'] =  'Die Aktivität wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addCountdown.success'] =  'Der Countdown wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editCountdown.success'] =  'Der Countdown wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addRadioSocket.success'] =  'Die Funksteckdose wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editRadioSocket.success'] =  'Die Funksteckdose wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addGpioOutput.success'] =  'Der GPIO wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editGpioOutput.success'] =  'Der GPIO wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addWol.success'] =  'Das Wake On Lan Gerät wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editWol.success'] =  'Das Wake On Lan Gerät wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addReboot.success'] =  'Der Neustart wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editReboot.success'] =  'Der Neustart wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addShutdown.success'] =  'Der Shutdown wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editShutdown.success'] =  'Der Shutdown wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addScript.success'] =  'Das Script wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editScript.success'] =  'Das Script wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.addbox.success'] =  'Die Box wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.editbox.success'] =  'Die Box wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.delete.success'] =  'Das Element wurde erfolgreich gelöscht';
$l['acp.switchableManagement.form.editSensor.success'] =  'Der Sensor wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.editSensor.delete.success'] =  'Der Sensor wurde erfolgreich gelöscht';
$l['acp.switchableManagement.form.deleteSensor.success'] =  'Der Sensor wurde erfolgreich gelöscht';
$l['acp.switchableManagement.form.deleteBox.success'] =  'Die Box wurde erfolgreich gelöscht';
$l['acp.switchableManagement.form.addAvmSocket.success'] =  'Die AVM Steckdose wurde erfolgreich erstellt';
$l['acp.switchableManagement.form.addFritzBox.success'] =  'Die Fritz!Box wurde erfolgreich erstellt';

$l['acp.switchableManagement.form.error.id'] =  'Ungültige ID';
$l['acp.switchableManagement.form.error.command'] =  'Ungültiger Befehl';
$l['acp.switchableManagement.form.addActivity.error.1102'] =  'Die Aktivität konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addActivity.error'] =  'Die Aktivität konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addElementToActivity.error.1102'] =  'Das Element konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addElementToActivity.error'] =  'Das Element konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addCountdown.error.1102'] =  'Der Countdown konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addCountdown.error'] =  'Der Countdown konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addRadioSocket.error.1102'] =  'Die Funksteckdose konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addRadioSocket.error'] =  'Die Funksteckdose konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addGpioOutput.error.1102'] =  'Der GPIO konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addGpioOutput.error'] =  'Der GPIO konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addWol.error.1102'] =  'Das WOL Gerät konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addWol.error'] =  'Das WOL Gerät konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addbox.error.1102'] =  'Die Box konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addbox.error'] =  'Die Box konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addReboot.error.1102'] =  'Der Neustart konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addReboot.error'] =  'Der Neustart konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addShutdown.error.1102'] =  'Der Shutdown konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addShutdown.error'] =  'Der Shutdown konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addScript.error.1102'] =  'Das Script konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addScript.error'] =  'Das Script konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.delete.error.1102'] =  'Das Element konnte wegen fehlender Schreibrechte nicht gelöscht werden';
$l['acp.switchableManagement.form.delete.error'] =  'Das Element konnte nicht gelöscht werden';
$l['acp.switchableManagement.form.editSensor.error.1102'] =  'Der Sensor konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.editSensor.error'] =  'Der Sensor konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.deleteSensor.error.1102'] =  'Der Sensor konnte wegen fehlender Schreibrechte nicht gelöscht werden';
$l['acp.switchableManagement.form.deleteSensor.error'] =  'Der Sensor konnte nicht gelöscht werden';
$l['acp.switchableManagement.form.deleteBox.error.1102'] =  'Die Box konnte wegen fehlender Schreibrechte nicht gelöscht werden';
$l['acp.switchableManagement.form.deleteBox.error'] =  'Die Box konnte nicht gelöscht werden';
$l['acp.switchableManagement.form.deleteElementFromActivity.error.1102'] =  'Das Element konnte wegen fehlender Schreibrechte nicht entfernt werden';
$l['acp.switchableManagement.form.deleteElementFromActivity.error'] =  'Das Element konnte nicht entfernt werden';
$l['acp.switchableManagement.form.addAvmSocket.error.1102'] =  'Die AVM Steckdose konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addAvmSocket.error'] =  'Die AVM Steckdose konnte nicht gespeichert werden';
$l['acp.switchableManagement.form.addFritzBox.error.1102'] =  'Die Fritz!Box konnte wegen fehlender Schreibrechte nicht gespeichert werden';
$l['acp.switchableManagement.form.addFritzBox.error'] =  'Die Fritz!Box konnte nicht gespeichert werden';

$l['acp.switchableManagement.form.success.order'] =  'Die Sortierung wurde erfolgreich gespeichert';
$l['acp.switchableManagement.form.error.order'] =  'Die Sortierung konnte nicht gespeichert werden';