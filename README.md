# Nächtigen - Übernachtungen mit einem Buchungskalender buchen für REDAXO CMS 5 auf YForm-Basis.

**WICHTIG: Es handelt sich bei diesem Add-on aktuell ausschließlich um einen Fork mit wenigen Anpassungen. In der Zukunft könnte dieser Fork jedoch unabhängig weiterentwickelt werden und nicht mehr Feature-Parität aufweisen.**

![Screenshot](https://raw.githubusercontent.com/dtpop/buchungskalender/main/assets/img/buchungskalender-screenshot-streifenkalender.png)

Nächtigen ist ein [Fork des bekannten Buchungskalenders](https://github.com/dtpop/buchungskalender) und wurde entwickelt für Inhaber*innen von Ferienobjekten (Ferienwohnungen, Ferienhäusern, Wohnmobilen usw.), die "über Nacht" vermietet werden. 

## Features

**Mehrere Objekte und Kombinationsangebote:** _Nächtigen_ kann mehrere Objekte verwalten. Damit können auch mehrere Ferienwohnungen oder Objekte verwaltet werden. Zusätzlich ist _Nächtigen_ mit einem speziellen Feature ausgestattet, das Kombinationsobjekte ermöglicht.

**Preisverwaltung:** Fixpreise pro Objekt sowie Saisonpreise sind möglich, es können verschiedene Zeiträume mit verschiedenen Preise definiert werden.

![Screenshot](https://raw.githubusercontent.com/dtpop/buchungskalender/main/assets/img/buchungskalender-preisverwaltung.png)

**Mindestbuchungsdauer:** Es lässt sich definieren, ob eintägige oder nur mehrtägige Buchungen zugelassen werden.

**Ical:** _Nächtigen_ nutzt aktuell die ical-Schnittstelle des Buchungskalender-Addons, mit der Buchungsdaten z.B. von Airbnb übernommen werden können.

**Erweiterbarkeit:** Alle Tabellen von _Nächtigen_ basieren auf YForm-Tabellen und können nach eigenen Bedürfnissen erweitert werden. 

**Weitere Regeln:** Die Angabe, wie viele Tage eine Buchung in der Zukunft liegen muss, ist möglich. So kann verhindert werden, dass Gäste vor mit zu wenig Vorlauf vor der Türe stehen.

## Einstellungen

* ical Synchronisation: Cachedauer in X Sekunden.
* Reservierung aufrecht erhalten: Eine Reservierung wird für X Minuten blockiert. Wenn sie in dieser Zeit nicht bestätigt wird, wird sie wieder als frei angezeigt.

## Objektverwaltung im Buchungskalender

![Screenshot](https://raw.githubusercontent.com/dtpop/buchungskalender/main/assets/img/buchungskalender-objektverwaltung.png)

## Saisonverwaltung

![Screenshot](https://raw.githubusercontent.com/dtpop/buchungskalender/main/assets/img/buchungskalender-saisondetail.png)

## Buchungsverwaltung

Für die Buchungsverwaltung gibt es zwei Ansichten. Den Streifenkalender in der Übersicht und den Kalender

### Übersicht / Streifenkalender

![Screenshot](https://raw.githubusercontent.com/dtpop/buchungskalender/main/assets/img/buchungskalender-screenshot-streifenkalender.png)

Im Original-Addon wird geschrieben:

> In der Übersicht kann man die Belegung jedes einzelnen Objektes sehen. Ein Klick auf ein belegtes Datum öffnet die Buchung in der Detailansicht. Hier kann die Buchung auch direkt bearbeitet werden.
>
> *Hinweis* Bei der Bearbeitung im Backend findet ebenso eine Prüfung auf Doppelbelegung statt. Eine Doppelbelegung sollte durch diese Prüfung ausgeschlossen sein. Dennoch ist der Anwender dafür verantwortlich, dass keine Doppelbelegungen gemacht werden.
> 
> Durch Kombinationsobjekte lässt sich der Buchungskalender sehr schön erweitern. Die Streifenansicht zeigt die Kombinationsobjekte sehr schön an. "Ferien mit Freunden" ist ein Kombinationsobjekt aus kleiner Wohnung und großer Wohnung. Die nicht zur Verfügung stehenden Objekte werden zusätzlich durch einen grauen Streifen gekennzeichnet. So ist beispielsweise "Ferien mit Freunden" nicht mehr verfügbar, sobald eine einzelne Wohnung gebucht ist.

### Streifenkalender, lineare Ansicht

Im Original-Addon wird geschrieben:

> In den Settings kann die Übersicht auch auf "GANT" gestellt werden. Es wird dann ein linearer Streifenkalender dargestellt, der insbesondere bei vielen Objekten eine bessere Übersicht bietet.


### Kalender

![Screenshot](https://raw.githubusercontent.com/dtpop/buchungskalender/main/assets/img/buchungskalender-screenshot.png)

Im Original-Addon wird geschrieben:

> In der Kalenderansicht kann ein Objekt ausgewählt werden. Es werden dann für dieses Objekt alle Termine angezeigt. Grüne Felder sind freie Termine, rote Felder sind belegt. Durch einen Klick auf ein grünes Feld kann ein Startdatum gewählt werden. Anschließend färbt sich der zu buchende Zeitraum blau und man kann ein Enddatum wählen. Über "Weiter" können dann die gewünschten Buchungsdaten eingegeben werden. Die Funktion ist quasi identisch wie die Buchung im Frontend. Es wird jedoch keine Mail verschickt und die Buchung wird direkt als "gebucht" eingetragen.
>
> Durch "Shift+Klick" auf einen gebuchten Zeitraum kann man eine Buchung direkt zur Bearbeitung aufrufen.
>
> *Hinweis* Bei der Bearbeitung im Backend findet keine Plausibilitätsprüfung statt. Es wird also nicht geprüft, ob ein Termin bereits belegt ist oder nicht. Hierfür ist der Bearbeiter komplett selbst verantwortlich!

## ical Funktionen

Siehe Original-Addon.

## E-Mail Templates

* `booking_confirm` - bekommt der Besucher als Bestätigung, wenn er eine Anfrage oder Buchung vorgenommen hat. Das Template ist für beide Arten der Reservierung programmiert.
* `booking_message` - bekommt der Betreiber der Website, wenn eine Buchung oder Anfrage vorgenommen wurde
* `confirmation_info` - bekommt der Betreiber, wenn der Besucher den Bestätigungslink aktiviert hat.

Diese Templates sind in der Programmierung fest verdrahtet, können also derzeit nicht frei gewählt werden. Die Inhalte können allerdings jederzeit angepasst werden, die mitgelieferten Templates dienen nur als Muster.

## Module

Das AddOn bringt die wichtigsten Module mit, die für den Betrieb einer Website mit Buchungsmöglichkeit sinnvoll sind.

* den Buchungskalender für das Frontend
* einen Minikalender für die Anzeige der Belegung
* einen Saisonkalender
* das Buchungsformular
* Auflistung der Preise
* die Ausgabe der ical Daten für die Synchronisation

Wenn der Modulcode eigenen Vorstellungen angepasst werden soll, empfiehlt es sich auch den key des jeweiligen Modules zu ändern. Somit wird verhindert, dass nach einem Update des AddOns versehehntlich über das Setup der Modulcode wieder überschrieben wird.
 
## Anpassungen

Wenn die scss Datei im AddOn geändert wird, so wird bei aktivem Debug Mode eine neue css Datei erstellt und gleich ins Assets Verzeichnis kopiert. Das gleiche gilt für eine Anpassung der js Datei. Diese wird auch direkt im Assets Verzeichnis aktualisiert, wenn der Debug Mode eingeschaltet ist.

## Validierung im Backend

Zwei Validierungen sind besonders wichtig: Das Enddatum muss vor dem Startdatum liegen:

```
$yform->setValidateField('compare', ['datestart','dateend','>=',rex_i18n::msg('datefrom_dateto_booking')]);
```

Die Belegung muss überprüft sein, wenn zwischendurch jemand anderes schneller gewesen sein sollte:

```php
$yform->setValidateField('customfunction', ['datestart,dateend,object_id,status','buka_booking::unique_booking','',rex_i18n::msg('buka_booking_uncorrect'),'0']);
```

## Danke

[Besonderer Dank gilt dem Autor des Original-Buchungskalenders, der das Addon unter MIT-Lizenz veröffentlicht hat.](https://github.com/dtpop/buchungskalender)

## Lizenz

Das AddOn steht unter der MIT Lizenz und kann sowohl für private als auch für gewerbliche Zwecke frei verwendet werden.
