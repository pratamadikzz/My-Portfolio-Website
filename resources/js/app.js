import "./bootstrap";
import { createElement } from "react";
import { createRoot } from "react-dom/client";
import ProjectCounter from "./components/ProjectCounter";
import ProjectLoader from "./components/ProjectLoader";

const projectLoader = document.getElementById("react-project-loader");

if (projectLoader) {
    createRoot(projectLoader).render(
        createElement(ProjectLoader, {
            projectsUrl: projectLoader.dataset.projectsUrl,
        }),
    );
}

const projectCounter = document.getElementById("react-project-counter");

if (projectCounter) {
    createRoot(projectCounter).render(
        createElement(ProjectCounter, {
            target: Number(projectCounter.dataset.target) || 10,
        }),
    );
}

const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    mobileMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
        });
    });
}
