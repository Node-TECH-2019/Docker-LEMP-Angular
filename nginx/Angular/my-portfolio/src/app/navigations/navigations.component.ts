import { Component, OnInit } from '@angular/core';
import { Navigation } from '../navigation';
import { NavigationService } from '../navigation.service';

@Component({
  selector: 'app-navigations',
  templateUrl: './navigations.component.html',
  styleUrls: ['./navigations.component.css']
})
export class NavigationsComponent implements OnInit {

  inboundClick = true;
  outboundClick = false;

  navigations: Navigation[];
  selectedNavigation: Navigation = {name: 'HOME'};

  constructor(private navigationService: NavigationService) { }

  ngOnInit(): void {
    this.getNavigations();
  }

  onSelect(navigation: Navigation): void {
    this.selectedNavigation = navigation;
  }

  getNavigations(): void {
    this.navigationService.getNavigations()
    .subscribe(navigations => this.navigations = navigations);
  }

}
