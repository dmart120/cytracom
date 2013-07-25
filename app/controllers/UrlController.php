<?php

class UrlController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Items::all();
		return View::make('items', array('title' => 'Retrieved All Items', 'items' => $items));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$jsonItem = Request::json('item');
		$item = new Items;
		$item->itemTypeId = $jsonItem['itemTypeId'];
		$item->itemNumber = $jsonItem['itemNumber'];
		$item->title = $jsonItem['title'];
		$item->description = $jsonItem['description'];
		$item->price = $jsonItem['price'];
		$item->showOnProposal = $jsonItem['showOnProposal'];
		$item->isRecurring = $jsonItem['isRecurring'];
		$item->glCodeId = $jsonItem['glCodeId'];
		$item->sortIndex = $jsonItem['sortIndex'];
		$item->includedMinutes = $jsonItem['includedMinutes'];
		$item->transTypeCode = $jsonItem['transTypeCode'];
		$item->save();
		return 'input'.print_r($jsonItem, true);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Items::find($id);
		return View::make('items', array('title' => 'Retrieved Item Id: '.$id, 'items' => array($item)));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}