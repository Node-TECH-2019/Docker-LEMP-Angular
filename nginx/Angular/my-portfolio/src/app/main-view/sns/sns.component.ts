import { Component, Input, OnInit } from '@angular/core';
import { Navigation } from '../../navigation';

@Component({
  selector: 'app-sns',
  templateUrl: './sns.component.html',
  styleUrls: ['./sns.component.css']
})
export class SnsComponent implements OnInit {

  @Input() navigation: Navigation;

  constructor() { }

  ngOnInit(): void {
  }

}
