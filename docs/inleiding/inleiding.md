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
