import { Component, Input, OnInit } from '@angular/core';
import { Navigation } from '../../navigation';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  @Input() navigation: Navigation;

  constructor() { }

  ngOnInit(): void {
  }

}
