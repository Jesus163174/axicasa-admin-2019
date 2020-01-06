import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './axicasa/pages/home/home.component';
import { PreviewComponent } from './axicasa/pages/preview/preview.component';


const routes: Routes = [
    {
        path:'',
        component:HomeComponent
    },
    {
        path:'preview/:livin_place_id',
        component:PreviewComponent
    }
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})
export class AppRoutingModule { }
