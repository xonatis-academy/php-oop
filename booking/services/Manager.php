<?php

class Manager {
    private Provider $providers;

    public function rent(Availability $d, Customer $c) {
        
    }

    public function listAvailibilities(string $date, int $capacity) {
        $availibities = [];

        foreach($this->providers as $provider) {
            $availibities[] = $provider->listAvailibilities($date, $capacity);
        } 

        return $availibities;
    }
}

?>