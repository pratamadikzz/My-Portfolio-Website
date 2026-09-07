import { useState } from "react";

const BATCH_SIZE = 4;

export default function ProjectLoader({ projectsUrl }) {
    const [isLoading, setIsLoading] = useState(false);
    const [projectsLoaded, setProjectsLoaded] = useState(false);
    const [hasMore, setHasMore] = useState(true);

    async function loadMoreProjects() {
        const projectGrid = document.querySelector("#projects > div > div.mt-14");
        if (!projectGrid || isLoading) return;

        if (!projectsLoaded) {
            setIsLoading(true);

            try {
                const response = await fetch(projectsUrl);
                if (!response.ok) throw new Error("Unable to load projects");

                const projectDocument = new DOMParser().parseFromString(
                    await response.text(),
                    "text/html",
                );
                const remoteProjects = [
                    ...projectDocument.querySelectorAll("#projects-grid .project-card"),
                ];

                document
                    .querySelectorAll(".load-more-project")
                    .forEach((card) => card.remove());

                remoteProjects.slice(3).forEach((card) => {
                    card.classList.add("load-more-project");
                    projectGrid.appendChild(card);
                });

                setProjectsLoaded(true);
            } catch {
                setIsLoading(false);
                return;
            }

            setIsLoading(false);
        }

        const hiddenProjects = [
            ...document.querySelectorAll(
                ".load-more-project:not(.is-visible)",
            ),
        ];
        hiddenProjects.slice(0, BATCH_SIZE).forEach((card) => {
            card.classList.add("is-visible");
        });

        if (hiddenProjects.length <= BATCH_SIZE) {
            setHasMore(false);
        }
    }

    if (!hasMore) return null;

    return (
        <button
            type="button"
            onClick={loadMoreProjects}
            disabled={isLoading}
            className="inline-flex items-center gap-2 rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-800 shadow-sm transition hover:border-blue-500 hover:text-blue-600 disabled:cursor-wait disabled:opacity-60"
        >
            <span>{isLoading ? "Loading..." : "Load More Projects"}</span>
            {!isLoading && (
                <svg className="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M12 5v14m-7-7 7 7 7-7"
                    />
                </svg>
            )}
        </button>
    );
}
