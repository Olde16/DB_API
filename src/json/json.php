<?php namespace DB_API\JSON; class StaDa {
    private $rawData;
    private $parsedData;

    public function __construct($JSON_Data) {
        $this->rawData = $JSON_Data;
        $this->parsedData = $this->parseJSON();
    }
    
    private function parseJSON() {
            return json_decode($this->rawData, true);
    }

    private function set_values() {
        $this->limit = $this->parsedData['limit'];
        $this->offset = $this->parsedData['offset'];
        $this->total = $this->parsedData['total'];
        $this->result = $this->parsedData['result'];
    }

    public string $limit;
    public string $offset;
    public string $total;
    public array $result of {
        "0": array of {
                "DBinformation": {
                    "availability": array of {
                        "friday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "holiday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "monday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "saturday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "sunday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "thursday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "tuesday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "wednesday" array of {
                            "fromTime": string,
                            "toTime": string
                        }
                    }
                },
                "aufgabentraeger": array of {
                    "name": string,
                    "shortName": string
                },
                "category": string,
                "countryCode": string,
                "evaNumbers": array of {
                    "0": array of {
                        "geographicCoordinates": array of {
                            "coordinates": array of {
                                "0": string,
                                "1": string,
                                "2": string
                            },
                            "type": string
                        },
                        "isMain": boolean,
                        "number": string
                    },
                    "1": array of {
                        "geographicCoordinates": array of {
                            "coordinates": array of {
                                "0": string,
                                "1": string,
                                "2": string
                            },
                            "type": string
                        },
                        "isMain": boolean,
                        "number": string
                    },
                    "2": array of {
                        "geographicCoordinates": array of {
                            "coordinates": array of {
                                "0": string,
                                "1": string,
                                "2": string
                            },
                            "type": string
                        },
                        "isMain": boolean,
                        "number": string
                    }
                },
                "federalState": string,
                "federalStateCode": string,
                "hasBycicleParking": boolean,
                "hasCarRental": boolean,
                "hasDBLounge": boolean,
                "hasLocalPublicTransport": boolean,
                "hasLockerSystem": boolean,
                "hasLostAndFound": boolean,
                "hasMobileService": string,
                "hasParking": boolean,
                "hasPublicFacilities": boolean,
                "hasRailwayMission": boolean,
                "hasSteplessAccess": boolean,
                "hasTaxiRank": boolean,
                "hasTravelCenter": boolean,
                "hasTravelNecessities": boolean,
                "hasWiFi": boolean,
                "ifopt": string,
                "localServiceStaff": array of {
                    "availability": array of {
                        "friday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "holiday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "monday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "saturday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "sunday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "thursday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "tuesday" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "wednesday" array of {
                            "fromTime": string,
                            "toTime": string
                        }
                    }
                },
                "localizedNames": array of {
                    "dan": string,
                    "dsb": string,
                    "frr": string,
                    "hsb": string,
                    "nds": string,
                },
                "mailinAddress": array of {
                    "city": string,
                    "houseNumber": string,
                    "street": string,
                    "zipCode": string
                },
                "mobilityServiceStaff": array of {
                    "availability": array of {
                        "friday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "holiday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "monday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "saturday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "sunday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "thursday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "tuesday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "wednesday1" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "friday2" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "holiday2" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "monday2" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "saturday2" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "sunday2" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "thursday2" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "tuesday2" array of {
                            "fromTime": string,
                            "toTime": string
                        },
                        "wednesday2" array of {
                            "fromTime": string,
                            "toTime": string
                        }
                    },
                    "meetingPoint": string,
                    "seviceOnBehalf": string,
                    "staffOnSite": boolean
                },
                "municipalityCode": string,
                "name": string,
                "number": string,
                "priceCategory": string,
                "regionalBereich": array of {
                    "name": string,
                    "number": string,
                    "shortName": string
                }
                // "ril100Identifiers": array of
            }
    };


    public function get_parsedData() {
        return $this->parsedData;
    }

    public function get_parsedData_byKey($key) {
        if (array_key_exists($key, $this->parsedData)) {
            return $this->parsedData[$key];
        } else {
            return null;
        }
    }

    public function get_parsedData_byIndex($index) {
        if (is_array($this->parsedData) && array_key_exists($index, $this->parsedData)) {
            return $this->parsedData[$index];
        } else {
            return null;
        }
    }

    public function getRawData() {
        return $this->rawData;
    }
}

namespace DB_API\JSON; class FaSta {
    public function __construct() {
        
    }
}

namespace DB_API\JSON; class RIS_Stations {
    public function __construct() {
        
    }
}

namespace DB_API\JSON; class Timetables {
    public function __construct() {
        
    }
}