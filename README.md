# Custom TopNav für plentyShop LTS Modern
Dieses Plugin bietet eine Möglichkeit, der TopNav Leiste von PlentyMarkets zusätzliche Buttons und ein Menü hinzuzufügen.

# Installation
Das Plugin kann über Git installiert werden oder mit Hilfe des plentyDevTools

## Containerverknüpfung 
In den Plugin-Einstellungen muss folgende Containerverknüfung gesetzt werden:

 - Data Provider: customTopNavLTSModern
 - Plugin Name: Ceres  
 - Template: Style

## Plugin-Prioritäten
Die Plugins müssen in folgender Reihenfolge geladen werden:
 

 1. IO (Prio am höchsten)
 2. plentyShop LTS Modern
 3. (dieses Plugin)
 4. plentyShop LTS (niedrigste Prio)

# Anpassungen
## Menüeinträge
Menüeinträge können in der Datei 'resources/views/Widgets/Header/CustomTopBarWidget.twig' angepasst werden.

Unter dem Kommentar
```<!-- Anfang: Benutzerdefinierte Links in der TopNav -->```
Können die Einträge angepasst werden

Unter dem Kommentar
```<!-- Anfang Drop-Down Menü -->```
Können die Einträge für das Dropdown-Menü angepasst werden

## CSS
Styles können in der Datei resources\css\customTopNavLTSModern.css angepasst werden.

# Hinweis
Das Plugin stellt kann und muss vor dem Einsatz entsprechend an die Bedürfnisse angepasst werden!