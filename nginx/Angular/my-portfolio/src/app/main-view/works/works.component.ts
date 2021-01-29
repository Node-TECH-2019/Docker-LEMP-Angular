import { Component, Input, OnInit } from '@angular/core';
import { Navigation } from '../../navigation';

@Component({
  selector: 'app-works',
  templateUrl: './works.component.html',
  styleUrls: ['./works.component.css']
})
export class WorksComponent implements OnInit {

  @Input() navigation: Navigation;

  constructor() { }

  ngOnInit(): void {
  }

}
