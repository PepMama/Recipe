import { Injectable, OnInit } from '@angular/core';
import { HttpClient,
    HttpErrorResponse,
    HttpEvent,
    HttpEventType,
    } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Router } from '@angular/router';

@Injectable({
    providedIn: 'root'
})
export class RecipeService {
    private apiUrl = 'http://127.0.0.1:8000/api/recipes';

    constructor(private http: HttpClient) {}

   // User
  // -----------------------------------------------------


   // Recipes
  // -----------------------------------------------------


   // Ingredients
  // -----------------------------------------------------


   // Categorie
  // -----------------------------------------------------


   // Favorite
  // -----------------------------------------------------


    // Comment
  // -----------------------------------------------------


}