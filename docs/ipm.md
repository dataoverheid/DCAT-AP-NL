# DCAT-AP-NL, een IPM voor Datasets

*Uitwisseling van metadata tussen (open) datacatalogi*

# Inleiding

Dit document is opgesteld in de context van het Open Data NEXT programma van het Ministerie van Binnenlandse Zaken en Koninkrijksrelaties. Het beschrijft het Nederlands toepassingsprofiel van de Data Catalogue Vocabulary van het W3C (DCAT). Dit Informatie Publicatiemodel (IPM) voor datasets specificeert een standaard voor de online uitwisseling van metadata tussen Nederlandse data-catalogi, zoals: data.overheid.nl, het Nationaal Georegister (NGR) en bijvoorbeeld ook de (open) data catalogi van gemeenten en provincies.

Wat is daarvoor nodig?
Het IPM voor datasets moet rekening houden met internationale standaarden op dit gebied. De volgende standaarden spelen daarbij een rol:

1. DCAT [1] is een toonaangevende W3C standaard voor metadata van data catalogi. 
1. Binnen de EU (DG connect, ISA program en het EU publication office) is een toepassingsprofiel [2] voor DCAT opgesteld. Het IPM is hierop gebaseerd. ISA zegt zelf over het EU toepassingsprofiel: "The DCAT Application profile for data portals in Europe (DCAT-AP) is a specification based on the Data Catalogue vocabulary (DCAT) for describing public sector datasets in Europe. Its basic use case is to enable a cross-data portal search for data sets and make public sector data better searchable across borders and sectors. This can be achieved by the exchange of descriptions of data sets among data portals." Dit IPM heeft hetzelfde doel op nationaal niveau.
1. ISO 19115 en ISO 19119 zijn standaarden voor metadata van Geo-informatie en geo-services. Deze standaarden worden gehanteerd door het NGR volgens het Nederlandse toepassingsprofiel van ISO 19115 en ISO 19119 [3].
1. OWMS 4.0, de Overheidbrede Web Metadata Standaard is het Nederlandse toepassingsprofiel van Dublin Core. Het is een standaard voor metadata van informatieobjecten van de Nederlandse overheid op internet.
1. Het ISA-programma heeft naast een generiek toepassingsprofiel op DCAT ook specifieke profielen opgesteld voor Geo-datasets (GeoDCAT-AP-EU) en statistische datasets (StatDCAT-AP-EU). DCAT-AP-NL 1.1 is compliant met deze specifieke toepassingsprofielen 

Dit IPM bevat:

- Een vertaling van de Engelse labels van DCAT naar Nederlandse labels;
- Een keuze voor welke entiteiten en attributen uit  het DCAT model wij overnemen;
- Een invulling van het waardebereik van de attributen (zoals bijvoorbeeld OWMS waardenlijsten voor organisaties);
- Een mapping van het metadata model van de Nederlandse metadataprofielen op ISO 19115 en ISO 19119 naar DCAT;
- Een mapping van OWMS (Dublin Core) naar DCAT.

Onderstaand figuur illustreert dit:

# Scope

Het doel van dit IPM is om een toepassingsprofiel te definiëren dat gebruikt kan worden voor de uitwisseling van beschrijvingen van Datasets tussen Dataportalen in Nederland.

Dit IPM:

- Identificeert de essentiële elementen en attributen van DCAT in de context van Datasets van de Nederlandse overheid.
- Identificeert de waardenlijsten die gebruikt worden in de Nederlandse context
- Identificeert de minimale set description metadata om uit te wisselen tussen Nederlandse Dataportalen.

Het IPM geeft geen specificaties voor implementatie, zoals mechanisme voor uitwisseling van data en verwacht gedrag van systemen die het IPM toepassen, anders dan hetgeen gedefinieerd in de sectie over conformering.

# Methodologie

## Ontwerpprincipes

- DCAT-AP-NL moet zo eenvoudig mogelijk toepasbaar zijn door data-portalen, catalogi van datasets en metadata-brokers in Nederland.
- Wijk niet zonder reden af van de specificaties van DCAT en DCAT-AP-EU.
- DCAT-AP-NL volgt OWMS, dus conformiteit aan DCAT-AP-NL betekent automatisch conformiteit met OWMS.
- Het toepassingsprofiel houdt rekening met specificaties in andere standaarden voor Datasets, met name die van het Nederlands toepassingsprofiel voor Geo-data: ISO 19115. Conformiteit aan DCAT-AP-NL betekent niet automatisch ook conformiteit aan deze standaarden.
- Op data.overheid.nl, het Open Data portaal van de Nederlandse overheid worden referentiegegevens beschikbaar gesteld. Toepassers van DCAT-AP-NL maken gebruik van deze referentiegegevens indien van toepassing maar kunnen daarvan afwijken als deze referentiegegevens niet toereikend zijn in hun situatie.
- Applicaties die conform DCAT-AP-NL zijn opgezet kunnen onderling beschrijvingen van Datasets aanbieden en ontvangen zoals beschreven in de sectie ‘Terminologie’. In combinatie met informatie op data.overheid.nl kunnen applicaties conform DCAT-AP-EU data aanbieden. Dit betekent dat bijvoorbeeld de datacatalogus op data.overheid.nl wel DCAT-AP-EU compliant kan zijn, maar dat er ook DCAT-AP-NL compliant applicaties kunnen zijn die niet DCAT-AP-EU compliant zijn.

## Gevolgde werkwijze

Bij het opstellen van DCAT-AP-NL zijn we als volgt te werk gegaan:

1. Begin met de classes en properties uit DCAT-AP-EU 1.1 [2].
1. Deel de classes in een van de volgende categorieën in:
    1. Uitwisselgegevens
    1. Referentiegegevens
    1. Samengestelde datatypen
    1. Enkelvoudige datatypen

Onder **Uitwisselgegevens** verstaan we de classes die specifiek zijn voor individuele datasets (Dataset, Distributie en Catalogusrecord).

**Referentiegegevens** zijn de classes waarvan we de instances centraal kunnen beschrijven, van een identificatie voorzien en in de vorm van waardenlijsten beschikbaar kunnen stellen. In Linked Data worden dit non-Literals genoemd.

**Datatypen** zijn de classes waarvan we de instances niet centraal opsommen, zoals de Referentiegegevens, maar waar enkel een vormvoorschrift wordt gegeven. In Linked Data worden dit Literals genoemd. Enkelvoudige datatypen bestaan uit 1 eigenschap met 1 waardebereik. Samengestelde datatypen hebben een structuur met meerdere eigenschap-waardebereik-combinaties.
