<?php

class Items extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'items';

	/**
	 * The primary key title used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'itemTypeId';

	/**
	 * Turning off the timestamps property
	 *
	 * @var boolean
	 */
	public $timestamps = false;

	/**
	 * Turning off the incrementing property
	 *
	 * @var boolean
	 */
	public $incrementing = false;

}