import { useEffect, useRef, useState } from "react";

export default function ProjectCounter({ target = 10 }) {
    const [count, setCount] = useState(0);
    const counterRef = useRef(null);

    useEffect(() => {
        let frameId;
        let hasStarted = false;

        function startAnimation() {
            if (hasStarted) return;
            hasStarted = true;

            const startedAt = performance.now();
            const duration = 900;

            function animate(now) {
                const progress = Math.min((now - startedAt) / duration, 1);
                const easedProgress = 1 - Math.pow(1 - progress, 3);
                setCount(Math.round(target * easedProgress));

                if (progress < 1) {
                    frameId = requestAnimationFrame(animate);
                }
            }

            frameId = requestAnimationFrame(animate);
        }

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    startAnimation();
                    observer.disconnect();
                }
            },
            { threshold: 0.2 },
        );

        if (counterRef.current) observer.observe(counterRef.current);

        return () => {
            observer.disconnect();
            if (frameId) cancelAnimationFrame(frameId);
        };
    }, [target]);

    return <span ref={counterRef}>{count}+</span>;
}
