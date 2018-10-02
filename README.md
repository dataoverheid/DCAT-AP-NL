# DCAT-AP-NL: DCAT Applicatieprofiel voor Nederland

Deze github repository wordt gebruikt voor het bijhouden van DCAT-AP-NL. Het bevat de meest actuele redactieversie, inclusief specifieke gepubliceerde versies.

Het profiel wordt bijgehouden in een  [DCAT-AP-NL-Profile.xlsx](https://github.com/dataoverheid/DCAT-AP-NL/raw/master/DCAT-AP-NL-Profile.xlsx) bestand. Vervolgens wordt het Linked Data Theatre gebruikt voor de generatie van de publicatiebestanden:

1. [Markdown documentatie](https://github.com/dataoverheid/DCAT-AP-NL/blob/master/docs/model.md)
1. [Shacl shapes bestand](https://github.com/dataoverheid/DCAT-AP-NL/blob/master/dcat-ap-nl-shacl.ttl)
1. [Grafische visualisatie](https://raw.githubusercontent.com/dataoverheid/DCAT-AP-NL/master/docs/dcat-ap-nl-profile.png)

[De configuratie voor het Linked Data Theatre](https://github.com/bp4mc2/bp4mc2-dcat/tree/master/ldt-config) is op dit moment onderdeel van de configuratie van DCAT profielen in het algemeen.

## Installatie

De installatie kan worden uitgevoerd door het [config.zip](https://github.com/bp4mc2/bp4mc2-dcat/raw/master/ldt-config/config.zip) bestand te importeren via de Linked Data Theatre backstage, zie voor meer informatie de [Linked Data Theatre wiki](https://github.com/architolk/linked-data-theatre/wiki).

## Hoe voer je een aanpassing door in het [DCAT-AP-NL-Profile.xlsx](https://github.com/dataoverheid/DCAT-AP-NL/raw/master/DCAT-AP-NL-Profile.xlsx) document?

1. Open het [DCAT-AP-NL-Profile.xlsx](https://github.com/dataoverheid/DCAT-AP-NL/raw/master/DCAT-AP-NL-Profile.xlsx) document
   1. Voer de gewenste wijzigingen door
   1. Sla het document met de wijzigingen op

1. Open het [Linked Data Theatre](http://linkeddata.ordina.nl/modeling)
   1. Ga naar de [Excel profiel upload](http://linkeddata.ordina.nl/modeling/container/profiel-xlsx) pagina
   1. Upload het aangepaste [DCAT-AP-NL-Profile.xlsx](https://github.com/dataoverheid/DCAT-AP-NL/raw/master/DCAT-AP-NL-Profile.xlsx) document

1. [Download](http://linkeddata.ordina.nl/modeling/query/downloads) het gewenste document
    1. [Markdown specificatie document](http://linkeddata.ordina.nl/modeling/query/query/profiel-doc.md)
    1. [SHACL turtle specificatie](http://linkeddata.ordina.nl/modeling/query/query/profiel-vocabulaire.ttl)
    1. [Grafische weergave](http://linkeddata.ordina.nl/modeling/query/query/profiel-vocabulaire?format=yed)

    De grafische weergave vereist het gebruik van het [yEd open source tool](https://www.yworks.com/downloads#yEd).

1. [Upload](https://github.com/dataoverheid/DCAT-AP-NL/upload/master) (of commit) deze wijzigingen naar Github
