<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: ProfileModel
 * 
 * Automatically generated via CLI.
 */
class ProfileModel extends Model {
    protected $table = 'students';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }
}