<?php

namespace App\Http\Controllers;

use App\Model\Account;
use App\Model\User;
use Illuminate\Http\Request;
use App\Response\BaseResponse;
use Illuminate\Support\Str;
use App\Http\Resources\AccountResource;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return Account::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $account)
    {
        try {

            $resp = Account::create([
                'agencia' => $account->agencia,
                'numero' => $account->numero,
                'digito' => $account->digito,
                'tipo_conta' => Str::upper($account->tipo_conta),
                'user_id' => $account->user_id,
            ]);

            return BaseResponse::success(['data' => $resp]);
        } catch (\Exception $e) {

            return BaseResponse::error([], $e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Request $account, $id)
    {
        //dd($account);
        $account = Account::findOrFail($id);
        $accountResource = new AccountResource($account, false);

        return $accountResource;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
