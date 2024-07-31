<?php

class HomeModel {
    public function getUsers() {
        $apiUrl = "https://dummyjson.com/users";
        try {
            $response = @file_get_contents($apiUrl);
            if ($response === FALSE) {
                throw new Exception("Failed to fetch data from API.");
            }
    
            $data = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception("Failed to decode JSON response: " . json_last_error_msg());
            }
            return $data['users'];
        } catch (Exception $e) {
            throw $e;
        }
    }
}
