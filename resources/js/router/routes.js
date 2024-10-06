export default [
    {
        path: "/",
        name: "home",
        component: () => import("../views/Home.vue"),
    },
    {
        path: "/products",
        name: "products",
        component: () => import("../views/Products.vue"),
    },
    {
        path: "/product/:id",
        name: "product",
        component: () => import("../views/Product.vue"),
    },
    {
        path: "/:pathMatch(.*)*",
        name: "404",
        component: () => import("../views/404.vue"),
    },
];
