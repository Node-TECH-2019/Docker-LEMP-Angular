import { Injectable } from '@angular/core';
import { Navigation } from './navigation';
import { NAVIGATIONS } from './mock-navigation';
import { Observable, of } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class NavigationService {

  constructor() { }

  getNavigations(): Observable<Navigation[]> {
    return of(NAVIGATIONS);
  }
}
