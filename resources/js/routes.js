import SignUp from "./components/Signup";
import Login from "./components/Login";
import BlogPost from "./components/BlogPost";
import BlogPostView from "./components/BlogPostView";
import EditComponent from "./components/EditComponent";

export const routes = [
    {
        path: '/',
        name: 'sign-up',
        meta: {layout:'sign-up'},
        component: SignUp
    },

    {
        path: '/login',
        name: 'Login',
        meta: {layout:'Login'},
        component: Login
    },

    {
        path: '/blogpost',
        name: 'blogpost',
        meta: {layout:'BlogPost'},
        component: BlogPost
    },

    {
        path: '/blogpostview',
        name: 'blogpostview',
        meta: {layout:'BlogPostView'},
        component: BlogPostView
    },

    {
        path: '/edit/:id',
        name: 'edit',
        meta: {layout:'EditComponent'},
        component: EditComponent
    },
]