import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
    providedIn: 'root'
})
export class LivingPlaceService {

    private url_api = "http://localhost:8000/api/v1/living-places/";

    constructor(private http: HttpClient) {

    }

    public getLivingPlacesResources(){
        return this.http.get(this.url_api);
    }
    public getLivingPlace(livingPlaceId){
        return this.http.get(this.url_api+livingPlaceId);
    }
}
