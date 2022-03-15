<?php 
namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait ApiServices {

   /* protected $baseurl = "https://acgcmsreporting.azurewebsites.net";
    protected $headers = [
        'Content-Type' => 'application/json',
        'X-AMC-Id' => '001'
    ];*/

    protected $baseurl = "https://acgcmsreporting-datatransfer-api-prod.azurewebsites.net";
    protected $headers = [
        'Content-Type' => 'application/json',
        'X-AMC-Id' => '515'
    ];
    
    public function connect() {
        $response = Http::withHeaders($this->headers)->post("$this->baseurl/auth/signin",[ 
            'username' => 'ATTAWFIK@Administrator',
            'password' => 'Pass@word1' 
        ]);
        if($response->status() == 200){
            \Auth::user()->setToken($response["token"]);
            return true;
        }else{
            \Auth::user()->setToken(null);
            return $this->error("Errors",400,$response->json());
        }
    }

    public function saveAgences($agences){
        $request = Http::withHeaders($this->headers)->withToken(\Auth::user()->externalToken);
        try {
            $response= $request->post("$this->baseurl/api/agences",[$agences]);
            if($response->failed()){
                $response->throw();
            }else{
                return 200;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function saveContrats($contrat){
        $request = Http::withHeaders($this->headers)->withToken(\Auth::user()->externalToken);
        try {
            $response= $request->post("$this->baseurl/api/contrats",[$contrat]);
            if($response->failed()){
                $response->throw();
            }else{
                return 200;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function saveTiers($tier){
        $request = Http::withHeaders($this->headers)->withToken(\Auth::user()->externalToken);
        try {
            $response= $request->post("$this->baseurl/api/tiers",[$tier]);
            if($response->failed()){
                $response->throw();
            }else{
                return 200;
            }
        } catch (\Throwable $th) {
                return $th->getMessage();
        }
    }

    public function saveAmcs($amc){
        $request = Http::withHeaders($this->headers)->withToken(\Auth::user()->externalToken);
        try {
            $response= $request->post("$this->baseurl/api/amc",[$amc]);
            if($response->failed()){
                $response->throw();
            }else{
                return 200;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function saveProduitAnnexes($value){
        $request = Http::withHeaders($this->headers)->withToken(\Auth::user()->externalToken);
        try {
            $response= $request->post("$this->baseurl/api/produitannexes",[$value]);
            if($response->failed()){
                $response->throw();
            }else{
                return 200;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function saveDonneeFinancieres($value){
        $request = Http::withHeaders($this->headers)->withToken(\Auth::user()->externalToken);
        try {
            $response= $request->post("$this->baseurl/api/donneefinanciere",[$value]);
            if($response->failed()){
                $response->throw();
            }else{
                return 200;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

?>