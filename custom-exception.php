<?php

$custom = isset($argv[1])? $argv[1]: 5;
$rope = isset($argv[2])? $argv[2]: 155;
$waterLevel = isset($argv[3])? $argv[3]: 8;

echo "\n\n----------------------] SCRIPT START [--------------------\n";

try {

    checkCustom($custom);

    checkRopeLength($rope);

    checkWaterOverflow($waterLevel);

} catch (CustomException $e) {

    echo "***** [ Caught Custom(" . $e->getCode() . "): ". $e->getMessage() . " ] *****";

} catch (InvalidRopeLengthException $e) {

    echo "***** [ Caught Length (" . $e->getCode() . "): ". $e->getMessage() . " ] *****";

} catch (WaterTankOverflowException $e) {

    echo "***** [ Caught Overflow (" . $e->getCode() . "): ". $e->getMessage() . " ] *****";

} finally {

    echo "\n----------------------]  SCRIPT END  [--------------------\n\n";

}


/************* CUSTOM EXCEPTION DEFINITIONS *************/
class CustomException extends \Exception
{
}

class InvalidRopeLengthException extends \LengthException
{
}

class WaterTankOverflowException extends \OverflowException
{
}


/********** CHECK FUNCTIONS ***********/
function checkCustom($custom)
{
    if ($custom == 0) {
        throw new CustomException('$custom can not be 0.', 100);
    }

    echo '$custom is ok'."\n";
}

function checkRopeLength($ropeLength)
{
    if($ropeLength < 100) {
        throw new InvalidRopeLengthException('Rope length should be >= 100');
    }

    echo 'Rope length is ok'."\n";
}

function checkWaterOverflow($waterHeightLevel)
{
    if ($waterHeightLevel > 10) {
        throw new WaterTankOverflowException('Water tank is overflowing.');
    }

    echo 'Water tank level is normal' . "\n";
}
