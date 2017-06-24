=========
Inleiding
=========

Deze documentatie specificeert een standaard voor de online uitwisseling van metadata tussen Nederlandse data-catalogi, zoals: `data.overheid.nl <https://data.overheid.nl>`_, het `Nationaal Georegister (NGR) <https://www.nationaalgeoregister.nl>`_ en bijvoorbeeld ook de (open) data catalogi van gemeenten en provincies. Deze documentatie is opgesteld in opdracht van het `Kennis- en Exploitatiecentrum Officiële Overheidspublicaties (KOOP) <http://koop.overheid.nl/over-koop>`__ van het Ministerie van Binnenlandse Zaken en Koninkrijksrelaties (BZK) in het kader van de doorontwikkeling van `data.overheid.nl <https://data.overheid.nl>`__: het open dataportaal van de Nederlandse overheid (DONL). Het beschrijft het Nederlands toepassingsprofiel van de `Data Catalogue Vocabulary <https://www.w3.org/TR/vocab-dcat/>`_ van het W3C (DCAT) dat is gebasseerd op de Europese versie van DCAT (DCAT-AP-EU v1.1) [2]_.

Bij het vaststellen van het Nederlands toepassingsprofiel voor datasets is er rekening gehouden met internationale standaarden. Drie standaarden spelen een centrale rol:

1. DCAT [1]_ is een toonaangevende W3C standaard voor metadata van data catalogi. Binnen de EU (DG connect, ISA program en het EU publication office) is een toepassingsprofiel [2]_ voor DCAT opgesteld. ISA zegt zelf over het EU toepassingsprofiel:
	*The DCAT Application profile for data portals in Europe (DCAT-AP) is a specification based on the Data Catalogue vocabulary (DCAT) for describing public sector datasets in Europe. Its basic use case is to enable a cross-data portal search for data sets and make public sector data better searchable across borders and sectors. This can be achieved by the exchange of descriptions of data sets among data portals.*
2. ISO 19115 en ISO 19119 zijn standaarden voor metadata van Geo-informatie en geo-services. Deze standaarden worden gehanteerd door het NGR volgens het Nederlandse toepassingsprofiel van ISO 19115 en ISO 19119 [3]_.
3. OWMS 4.0, de Overheidbrede Web Metadata Standaard is het Nederlandse toepassingsprofiel van Dublin Core. Het is een standaard voor metadata van informatieobjecten van de Nederlandse overheid op internet.

Het Nederlands toepassingsprofiel
=================================

Het Nederlands toepassingsprofiel bevat:

- Een keuze voor welke entiteiten en attributen uit het DCAT model overgenomen worden;
- Een invulling van het waardebereik van de attributen (zoals bijvoorbeeld OWMS waardelijsten voor organisaties);
- Een mapping van het metadata model van de Nederlandse metadataprofielen op ISO 19115 en ISO 19119 naar DCAT;
- Een mapping van OWMS (Dublin Core) naar DCAT.

Methodologie
============

Uitgangspunten
--------------

- Waar mogelijk worden de specificaties van DCAT en DCAT-AP-EU gevolgd.
- Het toepassingsprofiel houdt rekening met specificaties in andere standaarden voor Datasets, met name die van het Nederlands toepassingsprofiel voor Geo-data: ISO 19115.
- DCAT-AP-NL moet zo eenvoudig mogelijk toepasbaar zijn door data-portalen, catalogi van datasets en metadata-brokers in Nederland.
- Op data.overheid.nl, het Open Data portaal van de Nederlandse overheid worden referentiegegevens beschikbaar gesteld. Toepassers maken gebruik van deze referentiegegevens.
- Applicaties die conform DCAT-AP-NL zijn opgezet kunnen onderling beschrijvingen van Datasets aanbieden en ontvangen zoals beschreven in de sectie ‘Terminologie’. In combinatie met informatie op data.overheid.nl kunnen applicaties conform DCAT-AP-EU data aanbieden. Dit betekent dat bijvoorbeeld de datacatalogus op data.overheid.nl wel DCAT-AP-EU compliant kan zijn, maar dat er ook DCAT-AP-NL compliant applicaties kunnen zijn die niet DCAT-AP-EU compliant zijn.

Gevolgde werkwijze
------------------

Bij het opstellen van DCAT-AP-NL zijn we als volgt te werk gegaan:

1. Neem de classes en properties uit DCAT-AP-EU als uitgangspunt.
2. Deel alle classes die als datatype geïmplementeerd kunnen worden in als ‘Datatype’.
3. Deel alle classes die als referentiegegevens op data.overheid.nl of standaarden.overheid.nl beschikbaar zijn, in als ‘Reference’.
4. Neem de overige classes van DCAT-AP-EU over in DCAT-AP-NL.
5. Geef aan of deze in DCAT-AP-NL verplicht of optioneel zijn.
6. Loop alle verplichte eigenschappen uit ISO 19115 na en probeer deze te mappen op DCAT-AP-EU.

.. [1] `Data Catalog Vocabulary (DCAT); W3C Recommendation 16 January 2014 <http://www.w3.org/TR/2014/REC-vocab-dcat-20140116/>`_.
.. [2] `DCAT Application Profile for data portals in Europe; version 1.1, February 2015 <https://joinup.ec.europa.eu/asset/dcat_application_profile/asset_release/dcat-ap-v11>`_.
.. [3] `Nederlands metadataprofiel op ISO 19115 geografie, 1.3.1 <http://www.geonovum.nl/wegwijzer/standaarden/nederlands-metadataprofiel-op-iso-19115-geografie-131>`_.
.. [4] `Waardelijsten op standaarden.overheid.nl <standaarden.overheid.nl/owms/4.0/doc/waardelijsten>`_.
