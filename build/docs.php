<?php

class docs
{
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

        return sprintf(
            '%s%sProperty: %sURI: %sRange: %sWaardelijst: %sUsage note: %sCardinality: %s',
            $property . PHP_EOL,
            self::createRstLineFromString($property) . PHP_EOL . PHP_EOL,
            $property . PHP_EOL . PHP_EOL,
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

        return sprintf(
            '%s%sProperty: %sURI: %sRange: %sWaardelijst: %sUsage note: %sCardinality: %s',
            $property . PHP_EOL,
            self::createRstLineFromString($property) . PHP_EOL . PHP_EOL,
            $property . PHP_EOL . PHP_EOL,
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
