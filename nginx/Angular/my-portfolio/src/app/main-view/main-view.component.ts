import { Component, Input, OnInit } from '@angular/core';
import { Navigation } from '../navigation';

@Component({
  selector: 'app-main-view',
  templateUrl: './main-view.component.html',
  styleUrls: ['./main-view.component.css']
})
export class MainViewComponent implements OnInit {

  @Input() navigation: Navigation;

  constructor() { }

  ngOnInit(): void {
  }

}
