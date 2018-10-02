# Profile documentation

This page described the DCAT Applicationprofile NL version 1.1 as specified in: [https://data.overheid.nl/IPM-Datamodel](https://data.overheid.nl/IPM-Datamodel).

## Vocabularies and namespaces

The following vocabularies are used:

|prefix|namespace|documentation
|---|---|---
|adms|http://www.w3.org/ns/adms#|
|dcat|http://www.w3.org/ns/dcat#|
|dct|http://purl.org/dc/terms/|
|foaf|http://xmlns.com/foaf/0.1/|
|overheid|http://standaarden.overheid.nl/owms/terms/|
|owl|http://www.w3.org/2002/07/owl#|
|rdfs|http://www.w3.org/2000/01/rdf-schema#|
|schema|http://schema.org/|
|skos|http://www.w3.org/2004/02/skos/core#|
|spdx|http://spdx.org/rdf/terms#|
|vcard|http://www.w3.org/2006/vcard/ns#|

![](dcat-ap-nl-profile.png)

## Classes

The profile contains classes that are considered core to the profile and are part of the catalog core. Other classes are only used by reference and are stable with respect to the operational data ("Master data"). And some classes are merly used as complex datatypes.

### Core classes

|core classes|definition
|---|---
|[dcat:CatalogRecord](http://www.w3.org/ns/dcat#CatalogRecord)|
|[dcat:Dataset](http://www.w3.org/ns/dcat#Dataset)|
|[dcat:Distribution](http://www.w3.org/ns/dcat#Distribution)|

### Reference classes

|reference classes|definition
|---|---
|[dct:LicenseDocument](http://purl.org/dc/terms/LicenseDocument)|
|[skos:Concept](http://www.w3.org/2004/02/skos/core#Concept)|
|[skos:ConceptScheme](http://www.w3.org/2004/02/skos/core#ConceptScheme)|
|[dcat:Catalog](http://www.w3.org/ns/dcat#Catalog)|
|[foaf:Agent](http://xmlns.com/foaf/0.1/Agent)|

### Datatype classes

|datatype classes|definition
|---|---
|[dct:PeriodOfTime](http://purl.org/dc/terms/PeriodOfTime)|
|[spdx:Checksum](http://spdx.org/rdf/terms#Checksum)|
|[overheid:Regeling](http://standaarden.overheid.nl/owms/terms/Regeling)|
|[vcard:Address](http://www.w3.org/2006/vcard/ns#Address)|
|[vcard:Kind](http://www.w3.org/2006/vcard/ns#Kind)|
|[adms:Identifier](http://www.w3.org/ns/adms#Identifier)|

## Properties per class

The properties that can be used are described in the tables below

### Catalog

|property|range|definition
|---|---|---
|[dcat:dataset](http://www.w3.org/ns/dcat#dataset)|[dcat:Dataset](http://www.w3.org/ns/dcat#Dataset)|
|[dct:description](http://purl.org/dc/terms/description)||
|[dct:publisher](http://purl.org/dc/terms/publisher)|[foaf:Agent](http://xmlns.com/foaf/0.1/Agent)|
|[dct:title](http://purl.org/dc/terms/title)||
|[foaf:homepage](http://xmlns.com/foaf/0.1/homepage)||
|[dct:language](http://purl.org/dc/terms/language)||
|[dct:license](http://purl.org/dc/terms/license)|[dct:LicenseDocument](http://purl.org/dc/terms/LicenseDocument)|
|[dct:issued](http://purl.org/dc/terms/issued)||
|[dcat:themeTaxonomy](http://www.w3.org/ns/dcat#themeTaxonomy)|[skos:ConceptScheme](http://www.w3.org/2004/02/skos/core#ConceptScheme)|
|[dct:modified](http://purl.org/dc/terms/modified)||
|[dct:hasPart](http://purl.org/dc/terms/hasPart)|[dcat:Catalog](http://www.w3.org/ns/dcat#Catalog)|
|[dct:isPartOf](http://purl.org/dc/terms/isPartOf)|[dcat:Catalog](http://www.w3.org/ns/dcat#Catalog)|
|[dcat:record](http://www.w3.org/ns/dcat#record)|[dcat:CatalogRecord](http://www.w3.org/ns/dcat#CatalogRecord)|
|[dct:rights](http://purl.org/dc/terms/rights)||
|[dct:spatial](http://purl.org/dc/terms/spatial)||

### Catalog record

|property|range|definition
|---|---|---
|[foaf:primaryTopic](http://xmlns.com/foaf/0.1/primaryTopic)|[dcat:Dataset](http://www.w3.org/ns/dcat#Dataset)|
|[dct:identifier](http://purl.org/dc/terms/identifier)||
|[dct:modified](http://purl.org/dc/terms/modified)||
|[dct:conformsTo](http://purl.org/dc/terms/conformsTo)||
|[adms:status](http://www.w3.org/ns/adms#status)|[skos:Concept](http://www.w3.org/2004/02/skos/core#Concept)|
|[dct:issued](http://purl.org/dc/terms/issued)||
|[dct:description](http://purl.org/dc/terms/description)||
|[dct:language](http://purl.org/dc/terms/language)||
|[dct:source](http://purl.org/dc/terms/source)|[dcat:CatalogRecord](http://www.w3.org/ns/dcat#CatalogRecord)|
|[dct:title](http://purl.org/dc/terms/title)||

### Dataset

|property|range|definition
|---|---|---
|[dct:identifier](http://purl.org/dc/terms/identifier)||
|[dct:title](http://purl.org/dc/terms/title)||
|[dct:description](http://purl.org/dc/terms/description)||
|[dct:modified](http://purl.org/dc/terms/modified)||
|[dct:language](http://purl.org/dc/terms/language)||
|[dcat:distribution](http://www.w3.org/ns/dcat#distribution)|[dcat:Distribution](http://www.w3.org/ns/dcat#Distribution)|
|[dcat:landingPage](http://www.w3.org/ns/dcat#landingPage)||
|[dct:spatial](http://purl.org/dc/terms/spatial)||
|[dct:temporal](http://purl.org/dc/terms/temporal)|[dct:PeriodOfTime](http://purl.org/dc/terms/PeriodOfTime)|
|[dcat:keyword](http://www.w3.org/ns/dcat#keyword)||
|[overheid:authority](http://standaarden.overheid.nl/owms/terms/authority)|[foaf:Agent](http://xmlns.com/foaf/0.1/Agent)|
|[dct:publisher](http://purl.org/dc/terms/publisher)|[foaf:Agent](http://xmlns.com/foaf/0.1/Agent)|
|[dcat:theme](http://www.w3.org/ns/dcat#theme)|[skos:Concept](http://www.w3.org/2004/02/skos/core#Concept)|
|[dcat:contactPoint](http://www.w3.org/ns/dcat#contactPoint)|[vcard:Kind](http://www.w3.org/2006/vcard/ns#Kind)|
|[dct:accessRights](http://purl.org/dc/terms/accessRights)||
|[dct:issued](http://purl.org/dc/terms/issued)||
|[dct:conformsTo](http://purl.org/dc/terms/conformsTo)||
|[owl:versionInfo](http://www.w3.org/2002/07/owl#versionInfo)||
|[adms:versionNotes](http://www.w3.org/ns/adms#versionNotes)||
|[overheid:grondslag](http://standaarden.overheid.nl/owms/terms/grondslag)|[overheid:Regeling](http://standaarden.overheid.nl/owms/terms/Regeling)|
|[dct:accrualPeriodicity](http://purl.org/dc/terms/accrualPeriodicity)||
|[dct:hasVersion](http://purl.org/dc/terms/hasVersion)|[dcat:Dataset](http://www.w3.org/ns/dcat#Dataset)|
|[dct:isVersionOf](http://purl.org/dc/terms/isVersionOf)|[dcat:Dataset](http://www.w3.org/ns/dcat#Dataset)|
|[adms:identifier](http://www.w3.org/ns/adms#identifier)|[adms:Identifier](http://www.w3.org/ns/adms#Identifier)|
|[dct:provenance](http://purl.org/dc/terms/provenance)||
|[dct:relation](http://purl.org/dc/terms/relation)||
|[adms:sample](http://www.w3.org/ns/adms#sample)|[dcat:Distribution](http://www.w3.org/ns/dcat#Distribution)|
|[dct:source](http://purl.org/dc/terms/source)|[dcat:Dataset](http://www.w3.org/ns/dcat#Dataset)|
|[foaf:page](http://xmlns.com/foaf/0.1/page)||
|[dct:type](http://purl.org/dc/terms/type)|[skos:Concept](http://www.w3.org/2004/02/skos/core#Concept)|

### Distribution

|property|range|definition
|---|---|---
|[dcat:accessURL](http://www.w3.org/ns/dcat#accessURL)||
|[dct:description](http://purl.org/dc/terms/description)||
|[dct:format](http://purl.org/dc/terms/format)||
|[dct:license](http://purl.org/dc/terms/license)|[dct:LicenseDocument](http://purl.org/dc/terms/LicenseDocument)|
|[dcat:byteSize](http://www.w3.org/ns/dcat#byteSize)||
|[spdx:checksum](http://spdx.org/rdf/terms#checksum)|[spdx:Checksum](http://spdx.org/rdf/terms#Checksum)|
|[foaf:page](http://xmlns.com/foaf/0.1/page)||
|[dcat:downloadURL](http://www.w3.org/ns/dcat#downloadURL)||
|[dct:language](http://purl.org/dc/terms/language)||
|[dct:conformsTo](http://purl.org/dc/terms/conformsTo)||
|[dcat:mediaType](http://www.w3.org/ns/dcat#mediaType)||
|[dct:issued](http://purl.org/dc/terms/issued)||
|[dct:rights](http://purl.org/dc/terms/rights)||
|[adms:status](http://www.w3.org/ns/adms#status)|[skos:Concept](http://www.w3.org/2004/02/skos/core#Concept)|
|[dct:title](http://purl.org/dc/terms/title)||
|[dct:modified](http://purl.org/dc/terms/modified)||

### Agent

|property|range|definition
|---|---|---
|[foaf:name](http://xmlns.com/foaf/0.1/name)||
|[dct:type](http://purl.org/dc/terms/type)|[skos:Concept](http://www.w3.org/2004/02/skos/core#Concept)|

### Concept scheme

|property|range|definition
|---|---|---
|[dct:title](http://purl.org/dc/terms/title)||

### Concept

|property|range|definition
|---|---|---
|[skos:prefLabel](http://www.w3.org/2004/02/skos/core#prefLabel)||

### Checksum

|property|range|definition
|---|---|---
|[spdx:algorithm](http://spdx.org/rdf/terms#algorithm)||
|[spdx:checksumValue](http://spdx.org/rdf/terms#checksumValue)||

### Identifier

|property|range|definition
|---|---|---
|[skos:notation](http://www.w3.org/2004/02/skos/core#notation)||

### Licence document

|property|range|definition
|---|---|---
|[dct:type](http://purl.org/dc/terms/type)|[skos:Concept](http://www.w3.org/2004/02/skos/core#Concept)|
