import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule} from '@angular/forms';

import { AppComponent } from './app.component';
import { NavigationsComponent } from './navigations/navigations.component';
import { MainViewComponent } from './main-view/main-view.component';
import { HomeComponent } from './main-view/home/home.component';
import { AboutComponent } from './main-view/about/about.component';
import { SkillsComponent } from './main-view/skills/skills.component';
import { WorksComponent } from './main-view/works/works.component';
import { ContactComponent } from './main-view/contact/contact.component';
import { SnsComponent } from './main-view/sns/sns.component';

@NgModule({
  declarations: [
    AppComponent,
    NavigationsComponent,
    MainViewComponent,
    HomeComponent,
    AboutComponent,
    SkillsComponent,
    WorksComponent,
    ContactComponent,
    SnsComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
