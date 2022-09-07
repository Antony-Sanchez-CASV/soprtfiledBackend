<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subsvcurse;
use App\Models\Vcurse;
use Illuminate\Http\Request;
use App\Http\Resources\SubscribeResource;
use App\Http\Resources\VcurseResource;
class SubscribeController extends Controller
{
    public function listCurse()//lista de los cursos
    {
        return VcurseResource::collection(Vcurse::all());
    }
    public function ByActivity(Request $request){
        if(!Activity::find($request->id_activity)){
            return response()->json([
                'msg'=>'No existe esa actividad'
                ],200);
        }   
        return VcurseResource::collection(Vcurse::where('id_activity',$request->id_activity)->get());            
    }

    public function BySector(Request $request)//envia todos las canchas por sector
    {
        if(!Sector::find($request->id_sector)){
            return response()->json([
                'msg'=>'No existe ese sector'
                ],200);
        }
        return VcurseResource::collection(Vcurse::where('id_sector',$request->id_sector)->get());            
    }
    
    public function inscription(Request $request){

        if(!Vcurse::find($request->id_vcurse)){
            return response()->json([
                'msg'=>'No existe el curso'
                ],200);
        }

        $vcurse=Vcurse::find($request->id_vcurse);
        
        if(!$vcurse->avalible()){
            return response()->json([
                'msg'=>'No hay cupo'
                ],200);
        }

        $user=auth()->user();
        if($this->checkSubscribe($user->id,$vcurse->id)){
            return response()->json([
                'msg'=>'Ya esta inscrito'
                ],200);
        }
    
        $subcribe=new Subsvcurse();
        
        $subcribe->id_state=1;
        $subcribe->id_vcurse= $request->id_vcurse;
        $subcribe->id_user=$user->id;
        
        $subcribe->save();

        $vcurse->addMember();

        return response()->json([
            'res'=>true,
            'msg'=>'Inscripcion realizada',
        ], 200);
    }

    public function desubscribe(Request $request){

        
        if(!Vcurse::find($request->id_vcurse)){
            return response()->json([
                'msg'=>'No existe el curso'
                ],200);
        }

        $vcurse=Vcurse::find($request->id_vcurse);
        $user=auth()->user();
        
        if(!$this->checkSubscribe($user->id,$vcurse->id)){
            return response()->json([
                'msg'=>'No esta inscrito'
                ],200);
        }
        $subscriptions=Subsvcurse::where('id_user',$user->id)->get();
        
        foreach($subscriptions as $subscription){
            if( $subscription->id_vcurse==$vcurse->id){
                $subscription->id_state=2;     
                $subscription->save();
                $vcurse->lessMember();
                return response()->json([
                    'res'=>true,
                    'msg'=>'Inscripcion desechada',
                ], 200);
            }
        }
      
    }

    public function listDenizen()//lista de los cursos
    {
        $user=auth()->user();
        $subcriptions=Subsvcurse::where('id_user',$user->id)->get();

        foreach($subcriptions as $subscription){
            $curses[]=Vcurse::where('id',$subscription->id_vcurse)->first();
        }
        return VcurseResource::collection($curses);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SubscribeResource::collection(Subsvcurse::latest()->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subsvcurse  $subsvcurse
     * @return \Illuminate\Http\Response
     */
    public function show(Subsvcurse $subsvcurse)
    {
        return new SubscribeResource($subsvcurse);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subsvcurse  $subsvcurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subsvcurse $subsvcurse)
    {
        if($subsvcurse->delete()){
            return response()->json([
                'msg'=>"Eliminado"
            ],204);        
        }

    }
    private function checkSubscribe($id_user,$id_vcurse){
        if(!$id_vcurse){
            if(Subsvcurse::where('id_user',$id_user)){
                $subscriptions=Subsvcurse::where('id_user',$id_user)->get();
                foreach($subscriptions as $subscription){
                    if( $subscription->id_vcurse==$id_vcurse){
                        return TRUE;
                    }
                }
            }
        }  
        return FALSE;
    }
}
