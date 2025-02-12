import { Routes } from '@angular/router';
import { AuthComponent } from './pages/auth/auth.component';
import { RecipesComponent } from './pages/recipes/recipes.component';

export const routes: Routes = [
    { path: '', redirectTo: '/login', pathMatch: 'full' },
    { path: 'login', component: AuthComponent },
    { path: 'recipes', component: RecipesComponent}
];
