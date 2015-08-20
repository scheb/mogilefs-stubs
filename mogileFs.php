<?php

class MogileFs {

    /**
     * Initialize a new MogileFs Session
     *
     * @param string $host
     * @param int $port
     * @param string $domain
     * @param float $timeout
     *
     * @return bool
     */
    public function connect($host, $port, $domain, $timeout = 264005) {
    }

    /**
     * @return bool
     */
    public function isConnected() {
    }

    /**
     * Close a MogileFs Session
     *
     * @return bool
     */
    public function close() {
    }

    /**
     * Put a file to the MogileFs tracker
     *
     * @param string $filename
     * @param string $key
     * @param string $class
     * @param bool $use_file
     * @param bool $multi_dest
     *
     * @return bool
     */
    public function put($filename, $key, $class, $use_file = true, $multi_dest = true) {
    }

    /**
     * Get MogileFs fileInfo
     *
     * @param string
     *
     * @return array
     */
    public function fileInfo($key) {
    }

    /**
     * Get MogileFs path
     *
     * @param string $key
     * @param int $pathcount
     *
     * @return array
     */
    public function get($key, $pathcount = 2) {
    }

    /**
     * @return bool
     */
    public function replicate() {
    }

    /**
     * @param string $devid
     * @param string $status
     *
     * @return bool
     */
    public function createDevice($devid, $status) {
    }

    /**
     * @param string $domain
     *
     * @return bool
     */
    public function createDomain($domain) {
    }

    /**
     * @param string $domain
     *
     * @return bool
     */
    public function deleteDomain($domain) {
    }

    /**
     * @param string $domain
     * @param string $class
     * @param string $mindevcount
     *
     * @return bool
     */
    public function createClass($domain, $class, $mindevcount) {
    }

    /**
     * @param string $domain
     * @param string $class
     * @param string $mindevcount
     *
     * @return bool
     */
    public function updateClass($domain, $class, $mindevcount) {
    }

    /**
     * @param string $domain
     * @param string $class
     *
     * @return bool
     */
    public function deleteClass($domain, $class) {
    }

    /**
     * @param string $domain
     * @param string $host
     * @param string $ip
     * @param int $port
     *
     * @return array
     */
    public function createHost($domain, $host, $ip, $port) {
    }

    /**
     * @param string $hostname
     * @param string $ip
     * @param int $port
     * @param string $status dead|alive
     *
     * @return bool
     */
    public function updateHost($hostname, $ip, $port, $status = "alive") {
    }

    /**
     * @param string $host
     *
     * @return bool
     */
    public function deleteHost($host) {
    }

    /**
     * @param string $host
     * @param string $device
     * @param int $weight
     *
     * @return bool
     */
    public function setWeight($host, $device, $weight) {
    }

    /**
     * @param string $host
     * @param string $device
     * @param string $state dead|alive
     *
     * @return bool
     */
    public function setState($host, $device, $state = "alive") {
    }

    /**
     * @param string $disable
     * @param string $level
     *
     * @return bool
     */
    public function checker($disable = "off", $level = 1) {
    }

    /**
     * @return array
     */
    public function monitorRound() {
    }

    /**
     * Get MogileFs domains
     *
     * @return array
     */
    public function getDomains() {
    }

    /**
     * Get MogileFs file keys
     *
     * @return array
     */
    public function listKeys() {
    }

    /**
     * Get MogileFs file ids
     *
     * @return array
     */
    public function listFids() {
    }

    /**
     * Get MogileFs hosts
     *
     * @return array
     */
    public function getHosts() {
    }

    /**
     * Get MogileFs devices
     *
     * @return array
     */
    public function getDevices() {
    }

    /**
     * Sleep for $duration seconds
     *
     * @param $duration
     *
     * @return bool
     */
    public function sleep($duration) {
    }

    /**
     * @param bool $all
     *
     * @return array
     */
    public function stats($all = true) {
    }

    /**
     * Delete a MogileFs file
     *
     * @param $key
     *
     * @return bool
     */
    public function delete($key) {
    }

    /**
     * Move a MogileFs file
     *
     * @param string $key
     * @param string $destination
     *
     * @return bool
     */
    public function rename($key, $destination) {
    }

    /**
     * @param float $readTimeout
     */
    public function setReadTimeout($readTimeout) {
    }

    /**
     * @return float
     */
    public function getReadTimeout() {
    }

    /**
     * @return bool
     */
    public function isInDebuggingMode() {
    }

    /**
     * Alias of close()
     *
     * @return bool
     */
    public function disconnect() {
    }
}

class MogileFsException extends \Exception {

}

class MogileFsNotFoundException extends \Exception {

}
