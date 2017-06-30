<?php

class docs
{
    const content = '%s%sProperty: %sVerplichting: %sURI: %sRange: %sWaardelijst: %sUsage note: %sCardinality: %s';

    /**
     * @param string   $type
     * @param stdClass $object
     *
     * @return string
     */
    public static function getRstFilenameFromObject($type, stdClass $object)
    {
        $property = $object->euProperty;
        if ($object->euProperty === null) {
            $property = $object->nlProperty;
        }

        $mandatoryOrRecommendedOrOptional = $object->nlMandatoryOrRecommendedOrOptional;
        if ($object->nlMandatoryOrRecommendedOrOptional === null) {
            $mandatoryOrRecommendedOrOptional = $object->euMandatoryOrRecommendedOrOptional;
        }

        return sprintf(
            'properties/%s/%s/%s.rst',
            $type,
            $mandatoryOrRecommendedOrOptional,
            strtolower(str_replace(' ', '-', str_replace('/', '-', $property)))
        );
    }

    /**
     * @param stdClass $object
     *
     * @return string
     */
    public static function createRstDatasetPageFromObject(stdClass $object)
    {
        $property = $object->euProperty;
        if ($property === null) {
            $property = $object->nlProperty;
        }

        $usageNote = $object->euUsageNote;
        if ($usageNote === null) {
            $usageNote = $object->nlUsageNote;
        }

        $cardinality = $object->euCardinality;
        if ($cardinality === null) {
            $cardinality = $object->nlCardinality;
        }

        $nlMandatoryOrRecommendedOrOptional = $object->nlMandatoryOrRecommendedOrOptional;
        if ($nlMandatoryOrRecommendedOrOptional === null) {
            $nlMandatoryOrRecommendedOrOptional = $object->euMandatoryOrRecommendedOrOptional;
        }

        return sprintf(
            self::content,
            $property . PHP_EOL,
            self::createRstLineFromString($property) . PHP_EOL . PHP_EOL,
            $property . PHP_EOL . PHP_EOL,
            $nlMandatoryOrRecommendedOrOptional . PHP_EOL . PHP_EOL,
            $object->field . PHP_EOL . PHP_EOL,
            $object->nlRange . PHP_EOL . PHP_EOL,
            $object->nlRangeURLv2 . PHP_EOL . PHP_EOL,
            $usageNote . PHP_EOL . PHP_EOL,
            $cardinality . PHP_EOL
        );
    }

    /**
     * @param stdClass $object
     *
     * @return string
     */
    public static function createRstDistributiePageFromObject(stdClass $object)
    {
        $property = $object->euProperty;
        if ($object->euProperty === null) {
            $property = $object->nlProperty;
        }

        $usageNote = $object->euUsageNote;
        if ($object->euUsageNote === null) {
            $usageNote = $object->nlUsageNote;
        }

        $cardinality = $object->euCardinality;
        if ($object->euCardinality === null) {
            $cardinality = $object->nlCardinality;
        }

        $nlMandatoryOrRecommendedOrOptional = $object->nlMandatoryOrRecommendedOrOptional;
        if ($nlMandatoryOrRecommendedOrOptional === null) {
            $nlMandatoryOrRecommendedOrOptional = $object->euMandatoryOrRecommendedOrOptional;
        }

        return sprintf(
            self::content,
            $property . PHP_EOL,
            self::createRstLineFromString($property) . PHP_EOL . PHP_EOL,
            $property . PHP_EOL . PHP_EOL,
            $nlMandatoryOrRecommendedOrOptional . PHP_EOL . PHP_EOL,
            $object->field . PHP_EOL . PHP_EOL,
            $object->nlRange . PHP_EOL . PHP_EOL,
            $object->nlRangeURLv2 . PHP_EOL . PHP_EOL,
            $usageNote . PHP_EOL . PHP_EOL,
            $cardinality . PHP_EOL
        );
    }

    /**
     * @param $string
     *
     * @return string
     */
    public static function createRstLineFromString($string)
    {
        $line        = '';
        $aantalChars = strlen($string);
        for ($x = 0; $x < $aantalChars; $x++) {
            $line .= '=';
        }

        return $line;
    }
}
