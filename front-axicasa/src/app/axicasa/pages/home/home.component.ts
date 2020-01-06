import { Component, OnInit } from '@angular/core';
import { LivingPlaceService } from 'src/app/services/living-place.service';

@Component({
    selector: 'app-home',
    templateUrl: './home.component.html',
    styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

    public livingPlaces:any = [];
    constructor(private livingPlaceService: LivingPlaceService) { }

    ngOnInit() {
        this.getLivingPlaces();
    }
    private getLivingPlaces(){
        this.livingPlaceService.getLivingPlacesResources().subscribe((res:any)=>{
            this.livingPlaces = res.data;
            console.log(res.data)
        },(error:any)=>{
            console.log(error.message);
        });
    }
}
