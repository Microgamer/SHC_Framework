<?php

namespace SHC\Sensor\Model;

//Imports
use RWF\Util\String;


/**
 * Temperatur Schnittstelle
 *
 * @author     Oliver Kleditzsch
 * @copyright  Copyright (c) 2015, Oliver Kleditzsch
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @since      2.0.0-0
 * @version    2.0.0-0
 */
trait AbstractTemperature {

    /**
     * Temperatur
     *
     * @var Float
     */
    protected $temperature = 0.0;

    /**
     * Temperatur Anzeigen
     *
     * @var Integer
     */
    protected $temperatureVisibility = 1;

    /**
     * Temperatur Offset
     *
     * @var Float
     */
    protected $temperatureOffset = 0.0;

    /**
     * gibt den Aktuellen Temperaturwert zurueck
     *
     * @return Float
     */
    public function getTemperature() {

        return $this->temperature + $this->temperatureOffset;
    }

    /**
     * gibt den Aktuellen Temperaturwert vorbereitet zur Anzeige zurueck
     *
     * @return String
     */
    public function getDisplayTemperature() {

        return String::formatFloat($this->getTemperature(), 1) .' °C';
    }

    /**
     * setzt das Temperatur Offset
     *
     * @param  Float $temperatureOffset
     * @return \SHC\Sensor\Model\Temperature
     */
    public function setTemperatureOffset($temperatureOffset) {

        $this->temperatureOffset = $temperatureOffset;
        return $this;
    }

    /**
     * gbit das Temperatur Offset zurueck
     *
     * @return Float
     */
    public function getTemperatureOffset() {

        return $this->temperatureOffset;
    }

    /**
     * setzt die Sichtbarkeit der Temperatur
     *
     * @param  Integer $visibility Sichtbarkeit
     * @return \SHC\Sensor\Model\Temperature
     */
    public function temperatureVisibility($visibility) {

        $this->temperatureVisibility = $visibility;
        return $this;
    }

    /**
     * gibt die Sichtbarkeit der Temperatur an
     *
     * @return Boolean
     */
    public function isTemperatureVisible() {

        return ($this->temperatureVisibility == 1 ? true : false);
    }
}