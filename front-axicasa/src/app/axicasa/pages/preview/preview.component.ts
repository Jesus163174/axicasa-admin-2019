import { Component, OnInit } from '@angular/core';
import { LivingPlaceService } from 'src/app/services/living-place.service';

@Component({
    selector: 'app-preview',
    templateUrl: './preview.component.html',
    styleUrls: ['./preview.component.scss']
})
export class PreviewComponent implements OnInit {

    public livingPlace:any = [];
    constructor(private livinPlaceService:LivingPlaceService) { }

    ngOnInit() {
        this.getLivingPlace();
    }

    private getLivingPlace(){
        this.livinPlaceService.getLivingPlace(9).subscribe((res:any)=>{
            this.livingPlace = res;
            console.log(this.livingPlace);
        },(error:any)=>{
            console.log(error.message);
        });
    }

}



