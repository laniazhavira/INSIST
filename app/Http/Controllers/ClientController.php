<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $userPosition = Auth::user()->UserPosition;
        $clients = Client::orderBy('Client_Name')->get();
        return view('activity.client.index', compact('clients', 'userPosition')); // Updated view path
    }

    public function store(Request $request)
    {
        $request->validate([
            'Client_Name' => 'required|string|max:200',
            'Client_Address' => 'required|string|max:200',
            'Category' => 'nullable|string|in:Financial Service Industry,Government,Hospital,Education,Hotel,Military,Private',
        ]);

        Client::create([
            'Client_Name' => $request->Client_Name,
            'Client_Address' => $request->Client_Address,
            'Category' => $request->Category
        ]);


        return redirect()->route('activity.client.index')->with('success', 'Client added successfully.');
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $request->validate([
            'Client_Name' => 'required|string|max:200|unique:clients,Client_Name,' . $client->ID_Client . ',ID_Client',
            'Client_Address' => 'required|string|max:200',
            'Category' => 'required|string|in:Financial Service Industry,Government,Hospital,Education,Hotel,Military,Private',
        ]);

        $client->update($request->all());

        return redirect()->route('activity.client.update')->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
        Client::findOrFail($id)->delete();

        return redirect()->route('activity.client.inddestroex')->with('success', 'Client deleted successfully.');
    }

    public function show($id)
{
    $client = Client::findOrFail($id);
    if ($client) {
        return response()->json($client);
    } else {
        return response()->json(['error' => 'Client not found'], 404);
    }
}
}
