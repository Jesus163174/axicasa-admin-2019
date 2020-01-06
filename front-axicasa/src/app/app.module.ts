import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './axicasa/pages/home/home.component';
import { HttpClientModule } from '@angular/common/http';
import { PreviewComponent } from './axicasa/pages/preview/preview.component';
@NgModule({
    declarations: [
        AppComponent,
        HomeComponent,
        PreviewComponent
    ],
    imports: [
        BrowserModule,
        AppRoutingModule,
        HttpClientModule
    ],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule { }
