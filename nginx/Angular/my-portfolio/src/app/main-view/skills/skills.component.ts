import { Component, Input, OnInit } from '@angular/core';
import { Navigation } from '../../navigation';

@Component({
  selector: 'app-skills',
  templateUrl: './skills.component.html',
  styleUrls: ['./skills.component.css']
})
export class SkillsComponent implements OnInit {

  @Input() navigation: Navigation;

  constructor() { }

  ngOnInit(): void {
  }

}
